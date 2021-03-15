//var gulp = require('gulp');
var browserSync = require('browser-sync').create();
const { series, src, dest, watch, gulp } = require('gulp');
const sass = require('sass');
const fs = require('fs');

function serverBrowserSync(cb){
    browserSync.init({
        proxy: 'localhost/p2',
        browser: 'chrome',
        files: [
            "./**/*.css", "*.js", "./**/*.php"
        ]
    });
}

// traigo bootstrap
function getBootstrap(cb) {
    console.log('>>>getting bootstrap!')
    return src('./node_modules/bootstrap/scss/*.scss')
        .pipe(dest('assets/scss-from-bootstrap/'))
}

// compilo mi sass
function scssCompiler(cb) {
    console.log('>>>tocaste el sass');
    // uso la api de sass o dart sass
    const result = sass.renderSync({
        file: "./assets/index.scss",
        sourceMap: true,
        outFile: "assets/index.css"
      })
    // escribo el archivo con node nativo
    fs.writeFile('assets/index.css',result.css.toString() , function (err) {
        if (err) throw err;
        console.log('>>>Sass guardado!');
      });
    cb()
}

// con gulp sass puedo ejecutar esta tarea ahora publica
exports.sass = series(scssCompiler);
// exporto funcion default
exports.default = function (cb) {
    // ejecuto servidor browserSync
    serverBrowserSync();

    // traigo bootstrap los sass al iniciar
    getBootstrap();

    // escucho para compilar sass
    watch(['./assets/index.scss'], scssCompiler);

    cb()
};

// https://www.youtube.com/watch?v=y9LlnLTH87U
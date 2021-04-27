//var gulp = require('gulp');
var browserSync = require('browser-sync').create();
const { series, parallel, src, dest, watch, gulp } = require('gulp');
const sass = require('sass');
const fs = require('fs');

function serverBrowserSync(cb) {
    browserSync.init({
        proxy: 'localhost/p2',
        browser: 'chrome',
        files: [
            "./assets/*.css", 
            "./assets/*.js", 
            "./client/*.js", 
            "./dashboard/*.js",
            "./**/*.php"
        ]
    });
}

// traigo bootstrap
function getBootstrap(cb) {
    console.log('>>>getting bootstrap!')
    return src('./node_modules/bootstrap/scss/**/*.scss')
        .pipe(dest('assets/scss-from-bootstrap/'))
}

// compilo mi sass
function scssCompiler(cb) {
    console.log('>>>tocaste el sass');
    // uso la api de sass o dart sass
    const result = sass.renderSync({
        file: "assets/scss/index.scss",
        sourceMap: true,
        outFile: "assets/scss/index.css"
    })

    // escribo mapas de origen y el .css con node
    fs.writeFile('assets/index.css.map', result.map.toString(), (err) => { if (err) throw err; });
    // ------------
    fs.writeFile('assets/index.css', result.css.toString(), function (err) {if (err) throw err;});
    console.log('>>>Sass guardado!');
    cb()
}

function watching(cb) {
     // escucho para compilar sass
    watch(['./assets/scss/index.scss'], scssCompiler);
    cb();
}

// con gulp sass puedo ejecutar esta tarea ahora publica
exports.getBootstrap = getBootstrap;
exports.sass = scssCompiler;
// exporto funcion default
exports.default = parallel(serverBrowserSync, watching);

// https://www.youtube.com/watch?v=y9LlnLTH87U
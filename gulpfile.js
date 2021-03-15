//var gulp = require('gulp');
var browserSync = require('browser-sync').create();
const { series, src, dest, watch, gulp } = require('gulp');
const sass = require('gulp-sass');


// traigo bootstrap
function getBootstrap(cb) {
    console.log('getting bootstrap!')
    return src('./node_modules/bootstrap/scss/*.scss')
    .pipe(dest('assets/scss-from-bootstrap/'))
}

// compilo mi sass
function scssCompiler() {
    console.log('tocaste el sass');
    return src('./assets/index.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./assets/'));
}

// exporto funcion default
exports.default = function (cb) {
    browserSync.init({
        proxy: 'localhost/p2',
        browser: 'chrome',
        files: [
            "*.js", "./*.php", "./**/*.php"
        ]
    });

    // traigo bootstrap los sass al iniciar
    getBootstrap();

    // escucho para compilar sass
    watch(['./assets/index.scss'], scssCompiler);

    cb()
};


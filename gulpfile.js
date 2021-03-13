//var gulp = require('gulp');
var browserSync = require('browser-sync').create();
const { series, src, dest, watch } = require('gulp');


/* function css(){
    return src('./node_modules/bootstrap/dist/css/bootstrap.css')
    .pipe(dest('output/'));
} */
function getBootstrap(cb) {
    console.log('getting bootstrap!')
    return src('./node_modules/bootstrap/scss/*.scss')
    .pipe(dest('assets/scss-from-bootstrap/'))
}

exports.default = function (cb) {
    browserSync.init({
        proxy: 'localhost/p2',
        browser: 'chrome',
        files: [
            "css/*.css", "*.js", "./*.php", "./**/*.php"
        ]
    });
/*  onsole.log('////inicio default///')
    watch('./*.css', css); */
    getBootstrap();
    cb()
};


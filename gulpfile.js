let gulp = require('gulp');
let sass = require('gulp-sass');
let concat = require('gulp-concat');
let cleanCSS = require('gulp-clean-css');

let destOrigin = 'resources/assets/template/sass/**/*.sass';
let destOut = 'resources/assets/template/css';



const  buildCss = [
    'resources/assets/template/css/geral.css',
]

const webAssetsDir = 'public/build/'

    gulp.task('sass',function () {
        return gulp.src(destOrigin)
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest(destOut));
    });

    gulp.task('sass:watch', function () {
        gulp.watch(destOrigin,['sass']);
    });

    gulp.task('watch', function () {
        gulp.watch(destOrigin,['sass']);
    });

    gulp.task('workInCss', function () {
        gulp.src(buildCss)
            .pipe(concat('template.css'))
            .pipe(cleanCSS({debug: true}))
            .pipe(gulp.dest(webAssetsDir+'css/'))
    })

    gulp.task('default',['sass','watch','workInCss']);

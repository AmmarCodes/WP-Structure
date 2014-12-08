'use strict';

var gulp = require('gulp');
var $ = require('gulp-load-plugins')();

gulp.task('styles', function () {
  return gulp.src('dev/styles/main.scss')
    .pipe($.plumber())
    .pipe($.sass({errLogToConsole: true}))
    .pipe($.autoprefixer({browsers: ['last 3 version']}))
    .pipe(gulp.dest('assets/styles'));
});

gulp.task('jshint', function () {
  return gulp.src('dev/scripts/**/*.js')
    .pipe($.jshint())
    .pipe($.jshint.reporter('jshint-stylish'))
    .pipe($.jshint.reporter('fail'));
});

gulp.task('uglify', function(){
    return gulp.src('dev/js/**/*.js')
    .pipe($.uglify())
    .pipe(gulp.dest('assets/js/'));
});

gulp.task('watch', function () {
  gulp.watch('dev/styles/**/*.scss', ['styles']);
});

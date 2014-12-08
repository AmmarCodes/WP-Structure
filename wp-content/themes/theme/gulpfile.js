'use strict';

var gulp = require('gulp');
var del = require('del');
var run = require('run-sequence');
var $ = require('gulp-load-plugins')();

var manifest = {
    path: 'manifest.json'
};

gulp.task('styles', function () {
  return gulp.src('dev/styles/main.scss')
    .pipe($.plumber())
    .pipe($.sass({errLogToConsole: true}))
    .pipe($.autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(gulp.dest('dev/dist/css'));
});

gulp.task('scripts', function () {
  return gulp.src('dev/scripts/**/*.js')
    .pipe($.jshint())
    // .pipe($.jshint.reporter('jshint-stylish'))
    .pipe($.jshint.reporter('fail'))
    .pipe($.concat('main.js', {
        newLine: ';'
    }))
    .pipe($.uglify())
    .pipe(gulp.dest('dev/dist/js'));
});

gulp.task('scss-lint', function() {
    return gulp.src("dev/style/**/*.scss")
        .pipe($.scssLint());
});

gulp.task('clean', function(cb) {
    del([
        "assets/css/main*.css",
        "assets/js/main*.js"
    ], cb);
});

gulp.task('clean-original', function(cb) {
    del([
        "assets/css/main.css",
        "assets/js/main.js"
    ], cb);
});

gulp.task('version', function () {
    return gulp.src([
                    "dev/dist/css/main.css",
                    "dev/dist/js/main.js"
                    ], {base: "dev/dist"})
        .pipe(gulp.dest("assets"))
        .pipe($.rev())
        .pipe(gulp.dest("assets"))
        .pipe($.rev.manifest(manifest))
        .pipe(gulp.dest("assets"));
});

gulp.task('notify', function(){
    return gulp.src("./")
            .pipe($.notify("Build complete!"));
});

gulp.task('watch', function () {
  gulp.watch('dev/styles/**/*.scss', ['styles', 'version']);
});

gulp.task('build', ['clean'], function(callback) {
    run(['styles', 'scripts'],
        'version',
        'clean-original',
        'notify',
        callback);
});

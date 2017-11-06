var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var pump = require('pump');
var phpMinify = require('@aquafadas/gulp-php-minify');
var image = require('gulp-image');
var clean = require('gulp-rimraf');
var sass = require('gulp-sass');

gulp.task('clean', function() {
  console.log("Clean all files in build folder");
  return gulp.src("dist", { read: false }).pipe(clean());
});

gulp.task('css', function () {
  return gulp.src(['./src/libs/css/*.scss', './src/libs/css/*.scass', './src/libs/css/*.css', '!.src/libs/css/main.css'])
    .pipe(sass().on('error', sass.logError))
    .pipe(concatCss("./libs/css/main.css"))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./dist'));
});

gulp.task('css-dev', function () {
  return gulp.src(['./src/libs/css/*.scss', './src/libs/css/*.scass', './src/libs/css/*.css'])
    .pipe(sass().on('error', sass.logError))
    .pipe(concatCss("./libs/css/main.css"))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./src'));
});

gulp.task('uglify', function (cb) {
  pump([
        gulp.src('./src/libs/scripts/*.js'),
        uglify(),
        gulp.dest('./dist/libs/scripts')
    ],
    cb
  );
});

gulp.task('copy-assets', function() {
    gulp.src(['./src/assets/**/*', '!./src/assets/furniture/*', '!./src/assets/covers/*'])
    .pipe(gulp.dest('./dist/assets'));
});

gulp.task('copy-PHPMailer', function() {
    gulp.src(['./src/PHPMailer/**/*'])
    .pipe(gulp.dest('./dist/PHPMailer'));
});

gulp.task('copy-icomoon', function() {
    gulp.src('./src/libs/icomoon/**/*')
    .pipe(gulp.dest('./dist/libs/icomoon'));
});

gulp.task('copy-php', function() {
    gulp.src('./src/*.php')
      .pipe(gulp.dest('./dist'));
});

gulp.task('image', function () {
    gulp.src('./dist/assets/furniture').pipe(clean());
  gulp.src(['./src/assets/furniture/*.jpg', './src/assets/furniture/*.png', './src/assets/furniture/*.gif'] )
    .pipe(image())
    .pipe(gulp.dest('./dist/assets/furniture'));
});

gulp.task('covers', function () {
  gulp.src('./dist/assets/covers').pipe(clean());
  gulp.src(['./src/assets/covers/*.jpg', './src/assets/covers/*.png'] )
    .pipe(image())
    .pipe(gulp.dest('./dist/assets/covers'));
});

gulp.task('watch', function() {
  gulp.watch(['./src/libs/css/*.scss', './src/libs/css/*.sass', './src/libs/css/*.css'], ['css-dev']);
});

gulp.task('build',['clean'], function() {
        gulp.start('css', 'copy-assets', 'copy-icomoon', 'uglify', 'copy-php',  'copy-PHPMailer', 'image', 'covers');
});

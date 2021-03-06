var gulp = require('gulp');

var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var imageOptim = require('gulp-imageoptim');


gulp.task('sass', function () {
    gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sourcemaps.write(''))
        .pipe(rename('style.css'))
        .pipe(gulp.dest(''));
});

gulp.task('js', function() {
  gulp.src([
    'jsgulp/*'
  ])
    .pipe(concat('output.min.js') ) // concat pulls all our files together before minifying them
    .pipe(uglify() )
    .pipe(rename('main.js'))
    .pipe(gulp.dest(''))
});

gulp.task('production-sass', function () {
    gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cssnano())
        .pipe(rename('style.css'))
        .pipe(gulp.dest(''));
});

gulp.task('images', function() {
   return gulp.src('images/**/*')
       .pipe(imageOptim.optimize({
           jpegmini: true
       }))
       .pipe(gulp.dest('images'));
});

gulp.task('browser-sync', function () {
    browserSync.init(['*'], {
        proxy: "clone.dev",
        root: [__dirname],
        open: {
            file: 'index.php'
        }
    });
});


gulp.task('watch', ['browser-sync'], function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch('jsgulp/*', ['js']);
    gulp.watch('*.php', browserSync.reload);
});

gulp.task('default', ['sass', 'js']);

gulp.task('production', ['production-sass', 'js', 'images']);



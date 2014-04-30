// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Lint Task
gulp.task('lint', function() {
    return gulp.src('js/build/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src(['css/main-child/*.scss','css/mobile-child/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest('css/master-child.css'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src(['js/jquery-1.7.1.min.js','js/jquery.ui.js','js/jquery.iosslider.js','js/jquery.isotope.min.js','js/jquery-css-transform.js','js/jquery-rotate.js','js/browserdetect.js','js/mainactions.js','js/min/gsapi.min.js','js/blurobjs.js','library/scripts/vallenato.js','js/highcharts.js','js/calsACS-IT_custom.js'])
        .pipe(concat('mainactions.js'))
        .pipe(gulp.dest('js/build/'))
        .pipe(rename('mainactions.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/build'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('js/*.js', ['lint', 'scripts']);
    gulp.watch('scss/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);
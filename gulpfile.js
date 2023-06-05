/* ######################## */
/* ###### IMPORTATION ##### */
/* ######################## */

/* GENERAL */
const rename = require('gulp-rename');
const gulp = require('gulp');

/* CSS */
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');

/* JS */
const uglify = require('gulp-uglify');

/* ################## */
/* ###### FILES ##### */
/* ################## */

/* CHEMIN FICHIER */
const chemin = {
    styles : {
        Inspectdev : 'public/assets/style/**/*.scss',
        dev : 'public/assets/style/scss/*.scss',
        prod : 'public/assets/style/css/'
    },
    script: {
        dev : 'public/assets/js/sources/*.js',
        prod : 'public/assets/js/'
    },
}

/* ################# */
/* ###### TASK ##### */
/* ################# */

/* TRANSFORM SCSS EN CSS */
gulp.task('style', function(){
    return gulp.src(chemin.styles.dev)
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(rename({suffix : '-min'}))
    .pipe(gulp.dest(chemin.styles.prod));
});

/* TRANSFORM JS EN JS MINIFIER */
gulp.task('script', function(){
    return gulp.src(chemin.script.dev)
    .pipe(uglify())
    .pipe(rename({suffix : "-min"}))
    .pipe(gulp.dest(chemin.script.prod));
});

/* TACHE AUTO */
gulp.task('default', function(){
    gulp.watch(chemin.styles.Inspectdev,gulp.series('style')); // CSS
    gulp.watch(chemin.script.dev,gulp.series('script')); // JS
});
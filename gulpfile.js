const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const { src, series, parallel, dest, watch } = require('gulp');


//source directory
const scssPath = 'src/sass/**/theme.scss';
const scssAll = 'src/sass/**/*.scss'
const jsPath = 'src/js/**/theme.js';
const jquerypath = './node_modules/jquery/dist/jquery.min.js'
const bootstrapJs = './node_modules/bootstrap/dist/js/bootstrap.min.js';
const bootstrapBundleJs = './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';
const owlCarouselJs = './node_modules/owl.carousel/dist/owl.carousel.min.js';

//compile and min scss
function scssTask() {
  return src(scssPath)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write())
    .pipe(dest('assets/css'));
}

// minify js
function jsTask(){
  return src([jsPath,jquerypath,bootstrapJs,bootstrapBundleJs,owlCarouselJs]) // change to your source directory
    .pipe(sourcemaps.init())
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(dest('assets/js')); // change to your final/public directory
}


//watchtask
function watchTask() {
  watch([scssAll,scssPath,jsPath], parallel(scssTask,jsTask));
}

// Default Gulp task 
exports.scssTask = scssTask;
exports.jsTask = jsTask;


exports.default = series(
  parallel(scssTask,jsTask),
  watchTask
);
'use strict';

var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var del = require('del');
var gulp = require('gulp');
var babel = require('gulp-babel');
var htmlmin = require('gulp-htmlmin');
var runSequence = require('gulp4-run-sequence');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass')(require('node-sass'));
var purgecss = require('gulp-purgecss');

// Gulp task to minify CSS files using sass
gulp.task('sass-styles', function () {
  return gulp.src('./src/SCSS/style.scss')
    // Compile SASS files
    .pipe(sass({
      outputStyle: 'nested',
      precision: 10,
      includePaths: ['.'],
      onError: console.error.bind(console, 'Sass error:')
    }))
    // Auto-prefix css styles for cross browser compatibility
    .pipe(autoprefixer())
    // Minify the file
    .pipe(csso())
    // Output
    .pipe(gulp.dest('./dist/css'))
});

// Gulp task to minify pure CSS files
gulp.task('styles', function () {
  return gulp.src('./src/CSS/**/*.css')
    // Auto-prefix css styles for cross browser compatibility
    .pipe(autoprefixer())
    // Minify the file
    .pipe(csso())
    // Output
    .pipe(gulp.dest('./dist/css'))
});

// Gulp task to minify JavaScript files
gulp.task('scripts', function() {
  return gulp.src('./src/javascript/**/*.js')
    .pipe(babel({
        presets: ["@babel/preset-env"]
    }))
    // Minify the file
    .pipe(uglify())
    // Output
    .pipe(gulp.dest('./dist/js'))
});

// Gulp task to minify HTML files
gulp.task('pages', function() {
  return gulp.src(['./src/**/*.php'])
    .pipe(htmlmin({
      collapseWhitespace: true,
      removeComments: true
    }))
    .pipe(gulp.dest('./dist'));
});

gulp.task('images', function() {
  return gulp.src('./src/images/**/*')
  .pipe(gulp.dest('./dist/images'));
})

gulp.task('files', function() {
  return gulp.src('./src/FILES/**/*')
  .pipe(gulp.dest('./dist/FILES'));
})

gulp.task('logo', function() {
  return gulp.src('./src/LOGO/**/*')
  .pipe(gulp.dest('./dist/LOGO'));
})

gulp.task('fonts', function() {
  return gulp.src('./src/fonts/**/*')
  .pipe(gulp.dest('./dist/fonts'));
})

gulp.task('font-awesome', function() {
  return gulp.src('./src/font-awesome/**/*')
  .pipe(gulp.dest('./dist/font-awesome'));
})

gulp.task('icons', function() {
  return gulp.src('./src/ICONS/**/*')
  .pipe(gulp.dest('./dist/ICONS'));
})

//gulp.task('purgebootstrapcss', () => {
//    return gulp.src('./src/CSS/bootstrap.css')
//        .pipe(purgecss({
//            content: ['./**/*.php']
//        }))
//        .pipe(gulp.dest('./dist/css'))
//})

gulp.task('purgefontawesomecss', () => {
    return gulp.src('./src/font-awesome/css/**/*')
        .pipe(purgecss({
            content: ['./**/*.php']
        }))
        .pipe(gulp.dest('./dist/css'))
})

// Clean output directory
gulp.task('clean', () => del(['dist']));

// Gulp task to minify all files
gulp.task('default', gulp.series('clean', function (done) {
  runSequence(
    'sass-styles',
    'styles',
    'scripts',
    'pages',
    'images',
    'files',
    'logo',
    'fonts',
    'font-awesome',
    'icons',
    //'purgebootstrapcss',
    'purgefontawesomecss'
  );
    done();
}));

// Gulp watch
// gulp.watch('src/javascript/**/*.js', gulp.series('clean', 'default'));
// gulp.watch('src/SCSS/**/*.scss', gulp.series('clean', 'default'));

//function watchTask() {
//  watch('.src/SCSS/style.scss', {ignoreInitial: false}, styles);
//  watch('./src/javascript/**/*.js', {ignoreInitial: false}, scripts);
//  watch('./**/*.php', {ignoreInitial: false}, pages);
//}
//
//exports.watch = watchTask;
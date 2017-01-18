var gulp = require('gulp');
var $    = require('gulp-load-plugins')();
var concat = require('gulp-concat');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

var sassPaths = [
  'bower_components/normalize.scss/sass',
  'bower_components/foundation-sites/scss',
  //'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/*.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(cssnano())
    .pipe(rename({suffix: '.min'})) 
    .pipe(gulp.dest('css'));
});


gulp.task('imagemin', function () {
    return gulp.src('images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('images'));
});

gulp.task('serve',['sass'] ,function () {

    
browserSync.init({
        proxy: "joomla-test.dev",
        notify: false
    });

    gulp.watch("*.php").on("change", browserSync.reload);
    gulp.watch("scss/*.scss", ['sass']).on("change", browserSync.reload);
    gulp.watch("js/**/*.js").on("change", browserSync.reload);
});
gulp.task('default',['sass', 'serve']);



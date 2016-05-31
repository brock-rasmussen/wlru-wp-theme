'use strict';

import gulp from 'gulp';
import del from 'del';
import runSequence from 'run-sequence';
import gulpLoadPlugins from 'gulp-load-plugins';
import pkg from './package.json';
import mainBowerFiles from 'main-bower-files';

const $ = gulpLoadPlugins();

// lint javascript
gulp.task('lint', () =>
  gulp.src('src/scripts/**/*.js')
    .pipe($.eslint())
    .pipe($.eslint.format())
    .pipe($.eslint.failOnError())
);

// optimize images
gulp.task('images', () =>
  gulp.src('src/images/**/*')
    .pipe($.cache($.imagemin({
      progressive: true,
      interlaced: true
    })))
    .pipe(gulp.dest('images'))
    .pipe($.size({title: 'images'}))
);

// copy fonts to the root level
gulp.task('fonts', () =>
  gulp.src([
    'bower_components/bootstrap-sass/assets/fonts/**/*',
    'bower_components/slick-carousel/slick/fonts/**/*'
  ])
    .pipe(gulp.dest('fonts'))
    .pipe($.size({title: 'fonts'}))
);

gulp.task('copy', () =>
  gulp.src([
    'bower_components/slick-carousel/slick/ajax-loader.gif',
  ])
    .pipe(gulp.dest('./'))
    .pipe($.size({title: 'copy'}))
);

// compile and automatically prefix stylesheets
gulp.task('styles', () => {
  const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ];

  // for best performance don't add sass partials to `gulp.src`
  return gulp.src([
    'src/styles/**/*.{css,scss}',
    'bower_components/slick-carousel/slick/slick.scss',
    'bower_components/slick-carousel/slick/slick-theme.scss'
  ])
    .pipe($.newer('.tmp/styles'))
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      precision: 10
    }).on('error', $.sass.logError))
    .pipe($.concat('style.css'))
    .pipe($.if('*.css', $.cssnano()))
    .pipe($.size({title: 'styles'}))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('./'));
});

// concatenate and minify JavaScript. Transpiles ES2015 code to ES5
gulp.task('scripts', () =>
  // your scripts need to be listed here in the right order to be correctly concatenated
  gulp.src([
    'src/scripts/**/*.js'
  ])
    .pipe($.newer('.tmp/scripts'))
    .pipe($.sourcemaps.init())
    .pipe($.babel())
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('.tmp/scripts'))
    .pipe($.concat('scripts.min.js'))
    .pipe($.uglify({preserveComments: 'some'}))
    // output files
    .pipe($.size({title: 'scripts'}))
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest('./scripts'));

  gulp.src([
    'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    'bower_components/slick-carousel/slick/slick.min.js'
  ])
    .pipe($.newer('.tmp/scripts'))
    .pipe(gulp.dest('./scripts'))
);

gulp.task('clean', () => del(['.tmp', 'style.css', 'style.css.map', 'scripts.min.js', 'scripts.min.js.map'], {dot: true}));

gulp.task('watch', ['scripts', 'styles'], () => {
  gulp.watch(['src/styles/**/*.{scss,css}'], ['styles']);
  gulp.watch(['src/scripts/**/*.js'], ['lint', 'scripts']);
  gulp.watch('./**/*.php');
});

gulp.task('default', ['clean'], cb =>
  runSequence(
    'styles',
    ['lint', 'scripts'],
    'watch',
    cb
  )
);

'use strict';

import gulp from 'gulp';
import del from 'del';
import runSequence from 'run-sequence';
import gulpLoadPlugins from 'gulp-load-plugins';
import pkg from './package.json';
import mainBowerFiles from 'main-bower-files';

const $ = gulpLoadPlugins();

const copyToFonts = [
  'bower_components/slick-carousel/slick/fonts/**/*',
];

const copyToRoot = [
  'bower_components/slick-carousel/slick/ajax-loader.gif',
];

const styles = [
  'src/styles/**/*.{css,scss}',
];

const scripts = [
  'src/scripts/**/*.js'
]


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
    .pipe(gulp.dest('dist/images'))
    .pipe($.size({title: 'images'}))
);


// move to the fonts folder
gulp.task('copy.fonts', () =>
  gulp.src(copyToFonts)
    .pipe(gulp.dest('dist/fonts'))
    .pipe($.size({title: 'copy.fonts'}))
);
// move to the root
gulp.task('copy.root', () =>
  gulp.src(copyToRoot)
    .pipe(gulp.dest('dist'))
    .pipe($.size({title: 'copy.root'}))
);
gulp.task('copy', ['copy.fonts', 'copy.root']);


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
  return gulp.src(styles)
    .pipe($.newer('.tmp/styles'))
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      precision: 10
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(gulp.dest('.tmp/styles'))
    .pipe($.concat('style.css'))
    // .pipe($.if('*.css', $.cssnano({
    //   discardComments: {
    //     removeAll: true
    //   }
    // })))
    .pipe($.insert.prepend(
`/*
Theme Name: Wallarooster
Author: Wallaroo Media LLC
Author URI: http://wallaroomedia.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: bootstrap, responsive, simple
Text Domain: wallarooster

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/`
    ))
    .pipe($.size({title: 'styles'}))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('dist/styles'));
});
gulp.task('styles.watch', () =>
  gulp.watch(styles, ['styles'])
);


gulp.task('scripts', () =>
  gulp.src(scripts)
    .pipe($.newer('.tmp/scripts'))
    .pipe($.sourcemaps.init())
    .pipe($.babel())
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('.tmp/scripts'))
    .pipe($.concat('scripts.min.js'))
    .pipe($.uglify())
    .pipe($.size({title: 'scripts'}))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('dist/scripts'))
);
gulp.task('scripts.watch', () =>
  gulp.watch(scripts, ['lint', 'scripts'])
);


gulp.task('clean', () => del(['.tmp', 'style.css', 'style.css.map', 'scripts.min.js', 'scripts.min.js.map'], {dot: true}));


gulp.task('default', ['clean'], cb =>
  runSequence(
    'styles',
    ['lint', 'scripts'],
    'watch',
    cb
  )
);

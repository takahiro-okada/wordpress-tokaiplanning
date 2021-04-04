// 利用可能な命令を宣言
const { src, dest, watch, series, parallel } = require( "gulp" );
// sass という変数名で宣言しました。こうしておくことで、毎回 require( … と書かなくても、sass と書くだけで gulp-sass を利用することができます。
const sass = require( "gulp-sass" );

const sassGlob = require( 'gulp-sass-glob' );
// エラーが発生しても強制終了させない
const plumber = require( "gulp-plumber" );
// エラー発生時のアラート出力
const notify = require( "gulp-notify" );
// PostCSS利用
const postcss = require( "gulp-postcss" );
// CSSNext利用
const cssnext = require( "postcss-cssnext");
// 圧縮
const cleanCSS = require( "gulp-clean-css" );
// ファイル名変更
const rename = require( "gulp-rename" );
// ソースマップ作成
const sourcemaps = require( "gulp-sourcemaps" );
// JavaScriptを現在ブラウザが正常に判断してくれる書き方へ変換してくれる
const babel = require( "gulp-babel" );
// JavaScriptを圧縮
const uglify = require( "gulp-uglify" );
// 画像圧縮
const imagemin = require( "gulp-imagemin" );
// 画像圧縮
const imageminMozjpeg = require( "imagemin-mozjpeg" );
// 画像圧縮
const imageminPngquant = require( "imagemin-pngquant" );
// 画像圧縮
const imageminSvgo = require( "imagemin-svgo" );
// タスク自動化
const browserSync = require( "browser-sync" );
const srcPath = {
   css: 'src/css/**/*.scss',
   js: 'src/js/*.js',
   img: 'src/images/**/*',
   html: './**/*.html',
   php: './**/*.php',
}
const destPath = {
   css: 'dist/css/',
   js: 'dist/js/',
   img: 'dist/images/'
}
const browsers = [
   'last 2 versions',
   '> 5%',
   'ie = 11',
   'not ie <= 10',
   'ios >= 8',
   'and_chr >= 5',
   'Android >= 5',
]
const browserSyncOption = {
   proxy: 'http://tokai.local',
   open: true,
   watchOptions: {
       debounceDelay: 1000
   },
   reloadOnRestart: true,
}
const cssSass = () => {
   return src( srcPath.css )
       .pipe( sourcemaps.init() )
       .pipe(
           plumber(
               {
                   errorHandler: notify.onError( 'Error: <%= error.message %>' )
               }
           )
       )
       .pipe( sassGlob())
       .pipe( sass() )
       .pipe( postcss( [cssnext(browsers)] ) )
       .pipe( sourcemaps.write( '/maps' ) )
       .pipe( dest( destPath.css ) )
       .pipe( cleanCSS() )
       .pipe(
           rename(
               { extname: '.min.css' }
           )
       )
       .pipe( sourcemaps.write( '/maps' ) )
       .pipe( dest( destPath.css ) )
}
const jsBabel = () => {
   return src( srcPath.js )
       .pipe(
           plumber(
               {
                   errorHandler: notify.onError( 'Error: <%= error.message %>' )
               }
           )
       )
       .pipe( babel( {
           presets: [ '@babel/preset-env' ]
       } ) )
       .pipe( dest( destPath.js ) )
       .pipe( uglify() )
       .pipe(
           rename(
               { extname: '.min.js' }
           )
       )
       .pipe( dest( destPath.js ) )
}
const imgImagemin = () => {
   return src( srcPath.img )
       .pipe(
           imagemin(
               [
                   imageminMozjpeg({
                       quality: 80
                   }),
                   imageminPngquant(),
                   imageminSvgo({
                       plugins: [
                           {
                               removeViewbox: false
                           }
                       ]
                   })
               ],
               {
                   verbose: true
               }
           )
       )
       .pipe( dest( destPath.img ) )
}
const browserSyncFunc = () => {
   browserSync.init( browserSyncOption );
}
// オートリロードのオンオフ
const browserSyncReload = ( done ) => {
   browserSync.reload();
   done();
}
const watchFiles = () => {
   watch( srcPath.css, series( cssSass, browserSyncReload ) )
   watch( srcPath.js, series( jsBabel, browserSyncReload ) )
   watch( srcPath.img, series( imgImagemin, browserSyncReload ) )
   watch( srcPath.html, series( browserSyncReload ) )
   watch( srcPath.php, series( browserSyncReload ) )
}
exports.default = series( series( cssSass, jsBabel, imgImagemin )
, parallel( watchFiles, browserSyncFunc ) );
exports.build = series( cssSass, jsBabel, imgImagemin );
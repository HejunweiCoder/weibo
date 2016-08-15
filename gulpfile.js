var gulp = require('gulp'),
	sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	minifycss = require('gulp-minify-css'),
	jshint = require('gulp-jshint'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	rename = require('gulp-rename'),
	concat = require('gulp-concat'),
	notify = require('gulp-notify'),
	cache = require('gulp-cache'),
	livereload = require('gulp-livereload'),
	del = require('del');

var autoprefixerConfig = {
	browsers: ['last 5 versions']
};

var sassConfig = {
	outputStyle: 'compressed'
};

var uglifyConfig = {
	mangle: false
};

var sassBlob = [
	'Weibo/Common/assets/scss/*.scss',
	'Weibo/Common/assets/scss/*/*.scss',
	'Weibo/Common/assets/scss/*/*/*.scss',
	'Weibo/Common/assets/scss/*/*/*/*.scss',
	'Weibo/Common/assets/scss/*/*/*/*/*.scss',
	'Weibo/Common/assets/scss/*/*/*/*/*/*.scss'
];

var jsBlob = [
	'Weibo/Common/assets/js/*.js',
	'Weibo/Common/assets/js/*/*.js',
	'Weibo/Common/assets/js/*/*/*.js',
	'Weibo/Common/assets/js/*/*/*/*.js',
	'Weibo/Common/assets/js/*/*/*/*/*.js',
	'Weibo/Common/assets/js/*/*/*/*/*/*.js',
	'Weibo/Common/assets/js/*/*/*/*/*/*/*.js'
];

// 编译 sass
gulp.task('sass', function () {
	gulp.src(sassBlob)
		//.pipe(cached('sass'))
		.pipe(sass(sassConfig))
		.on('error', notify.onError({
			message: "Error in line:<%= error.lineNumber %>;<%= error.message %>",
			title: "Error compiling sass"
		}))
		.pipe(autoprefixer(autoprefixerConfig))
		.pipe(gulp.dest('./Public/css'))
		.pipe(livereload());
});

// 混淆压缩 js
gulp.task('js', function () {

	gulp.src(jsBlob)
		.pipe(cached('js'))
		.pipe(uglify(uglifyConfig))   // 压缩混淆 js
		.on('error', notify.onError({
			message: "Error in line:<%= error.lineNumber %>;<%= error.message %>",
			title: "Error compiling js"
		}))
		.pipe(gulp.dest('./Public/js'))
		.pipe(livereload());
});

// 文件有改动就编译
gulp.task('watch', function () {

	gulp.start('sass');
	gulp.start('js');

	livereload.listen();

	gulp.watch(sassBlob, [
		'sass'
	]);

	gulp.watch(jsBlob, [
		'js'
	]);
});

// 删除编译后的 js, css
gulp.task('clean', function () {
	return gulp.src([
			'public/css',
			'public/js'
		], {read: false})
		.pipe(clean({force: true}));
});

// 默认任务
gulp.task('default', function () {
	gulp.start('sass');
	gulp.start('js');
});



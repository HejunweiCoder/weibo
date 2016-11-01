var gulp = require('gulp'),
	sass = require('gulp-sass'),
	uglify = require('gulp-uglify'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	notify = require('gulp-notify'),
	cached = require('gulp-cached'),
	clean = require('gulp-clean');

var autoprefixerConfig = {
	browsers: ['last 5 versions']
};

var sassConfig = {
	outputStyle: 'nested'
};

var uglifyConfig = {
	mangle: false
};

var sassBlob = [
	'./WeiBo/Common/assets/scss/*.scss',
	'./WeiBo/Common/assets/scss/*/*.scss',
	'./WeiBo/Common/assets/scss/*/*/*.scss',
	'./WeiBo/Common/assets/scss/*/*/*/*.scss',
	'./WeiBo/Common/assets/scss/*/*/*/*/*.scss',
	'./WeiBo/Common/assets/scss/*/*/*/*/*/*.scss'
];

var jsBlob = [
	'./WeiBo/Common/assets/js/*.js',
	'./WeiBo/Common/assets/js/*/*.js',
	'./WeiBo/Common/assets/js/*/*/*.js',
	'./WeiBo/Common/assets/js/*/*/*/*.js',
	'./WeiBo/Common/assets/js/*/*/*/*/*.js',
	'./WeiBo/Common/assets/js/*/*/*/*/*/*.js',
	'./WeiBo/Common/assets/js/*/*/*/*/*/*/*.js'
];

// 编译 sass
gulp.task('sass', function() {
	gulp.src(sassBlob)
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



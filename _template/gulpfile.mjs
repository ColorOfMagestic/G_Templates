import browserSync from 'browser-sync'
import gulp from 'gulp'
import autoprefixer from 'autoprefixer'
import cleanCSS from 'gulp-clean-css'
import plumber from 'gulp-plumber'
import gulpSass from 'gulp-sass'
import * as dartSass from 'sass'
import terser from 'gulp-terser'
import fileInclude from 'gulp-file-include'
import postcss from 'gulp-postcss'
import tailwindcss from 'tailwindcss'
import { deleteAsync } from 'del'
import debug from 'gulp-debug'
import webp from 'gulp-webp'
import merge from 'merge-stream'
import path from 'path'
import gulpIf from 'gulp-if'
import newer from 'gulp-newer'

const sass = gulpSass(dartSass)
const projectName = path.basename(process.cwd())

const paths = {
	html: {
		src: 'src/*.{html,php}',
		dest: 'dist/',
	},
	styles: {
		src: 'src/scss/**/*.scss',
		dest: 'dist/style/',
	},
	images: {
		src: 'src/img/**/*.{jpg,jpeg,png,gif,svg,webp}',
		dest: 'dist/img/',
	},
	js: {
		src: 'src/scripts/**/*.js',
		dest: 'dist/scripts/',
	},
	tailwindConfig: {
		src: 'tailwind.config.js',
	},
	tailwindContent: {
		src: 'src/**/*.{html,js,php}',
	},
}

// Clean
export function clean() {
	return deleteAsync(['dist'])
}

// HTML
export function html() {
	return gulp
		.src(paths.html.src)
		.pipe(plumber())
		.pipe(
			fileInclude({
				prefix: '@@',
				basepath: '@file',
			})
		)
		.pipe(gulp.dest(paths.html.dest))
		.pipe(browserSync.stream())
}

// Styles
export function styles() {
	return gulp
		.src(paths.styles.src)
		.pipe(plumber())
		.pipe(sass())
		.pipe(
			postcss([
				tailwindcss('./tailwind.config.js'),
				autoprefixer(),
			])
		)
		.pipe(cleanCSS({ compatibility: 'ie8' }))
		.pipe(gulp.dest(paths.styles.dest))
		.pipe(browserSync.stream())
}

// Images
export function images() {
	return gulp
		.src(paths.images.src)
		.pipe(plumber())
		// Применяем gulp-newer условно:
		// Для JPG, JPEG, PNG проверяем наличие соответствующего WEBP-файла;
		// для остальных файлов обычная проверка.
		.pipe(
			gulpIf(
				file => ['.jpg', '.jpeg', '.png'].includes(path.extname(file.path).toLowerCase()),
				newer({ dest: paths.images.dest, ext: '.webp' }),
				newer(paths.images.dest)
			)
		)
		// Если файл JPG, JPEG или PNG, то конвертируем в WEBP
		.pipe(
			gulpIf(
				file => ['.jpg', '.jpeg', '.png'].includes(path.extname(file.path).toLowerCase()),
				webp({ quality: 85 })
			)
		)
		.pipe(gulp.dest(paths.images.dest))
		.pipe(browserSync.stream())
}

// JavaScript
export function scripts() {
	return gulp
		.src(paths.js.src)
		.pipe(plumber())
		.pipe(newer(paths.js.dest))
		.pipe(terser())
		.pipe(gulp.dest(paths.js.dest))
		.pipe(browserSync.stream())
}

// Copy other files
export function copy() {
	return gulp
		.src(['src/**/*', '!src/img/**/*'], { base: 'src' })
		.pipe(newer('dist'))
		.pipe(gulp.dest('dist'))
		.pipe(browserSync.stream())
}

// Watch
export function watch() {
  browserSync.init({
    proxy: "http://dev.local/dist",
    port: 3000,
    browser: "firefox",
    notify: false,
    open: true,
    reloadDebounce: 1500,
    reloadDelay: 1000,
    injectChanges: false,
    logLevel: "debug"
  })

  // Точечные watchers без дублирования
  gulp.watch(paths.html.src, html)
  gulp.watch([
    'src/**/*',
    '!src/scss/**/*',
    '!src/img/**/*',
    '!src/scripts/**/*'
  ], copy)
  gulp.watch([
    paths.styles.src,
    paths.tailwindConfig.src,
    paths.tailwindContent.src
  ], styles)
  gulp.watch(paths.images.src, images)
  gulp.watch(paths.js.src, scripts)
}

// Сборка проекта
const build = gulp.series(
	clean,
	gulp.parallel(copy, html, styles, images, scripts,watch)
	
)

export default build

'use strict'

var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    compass = require('gulp-compass'),
    cssnano = require('gulp-cssnano'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    inject = require('gulp-inject'),
    wiredep = require('wiredep').stream,
    gulpif = require('gulp-if'),
    useref = require('gulp-useref'),
    uglify = require('gulp-uglify'),
    uncss = require('gulp-uncss')

var paths = {
  compass: ['./app/sass/**/*.sass']
}

// Pre-procesa archivos Sass a CSS y recarga los cambios
gulp.task('compass', function(){
  gulp.src(paths.compass)
    .pipe(compass({
      css: './app/css/',
      sass: './app/sass/',
      image: './app/images/'
    }))
    .pipe(gulp.dest('./app/css'))
    .pipe(livereload())
})

// Recarga el navegador cuando hay cambios en el HTML
gulp.task('html', function(){
  // gulp.src(['./public/**/*.html', './app/**/*.html'])
  gulp.src(['./app/**/*.html'])
    .pipe(livereload())
})

// Busca errores en el JS y nos los muestra por pantalla
gulp.task('jshint', function(){
    return gulp.src('./app/js/**/*.js')
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('jshint-stylish'))
        .pipe(jshint.reporter('fail'))
})

// Busca en las carpetas de estilos y javascript los archivos que hayamos creado
// para inyectarlos en el default.html
gulp.task('inject', function(){
  var target = gulp.src('./app/**/*.html')

  return target.pipe(inject(gulp.src('./app/css/**/*.css', {read: false}), {relative: true}))
    .pipe(inject(gulp.src('./app/js/**/*.js', {read: false}), {relative: true}))
    .pipe(gulp.dest('./app'))
})

// Inyecta las librerias que instalamos vía Bower
gulp.task('wiredep', function(){
  gulp.src('./app/**/*.html')
    .pipe(wiredep({
      directory: './app/lib'
    }))
    .pipe(gulp.dest('./app'))
})

// Comprime los archivos CSS y JS enlazados en el default.html
//  y los minifica
gulp.task('compress', function()  {
  gulp.src('./app/**/*.html')
    .pipe(useref())
    .pipe(gulpif('*.js',  uglify()))
    // .pipe(gulpif('*.js',  uglify({mangle: false })))
    .pipe(gulpif('*.css', cssnano()))
    .pipe(gulp.dest('./public'))
})

gulp.task('minify', function(){
  return gulp.src('./public/css/style.min.css')
    .pipe(cssnano())
    .pipe(gulp.dest('./public/css'))
  //return gulp.src('./public/js/**/*.js')
  //  .pipe(uglify())
  //  .pipe(gulp.dest('./public/js'))
})

// Elimina el CSS que no es utilizado para reducir el peso del archivo
gulp.task('uncss', function(){
  gulp.src('./public/css/style.min.css')
    .pipe(uncss({
      html: [
        './app/default.html',
        './app/form.html',
        './app/about.html',
      ]
    }))
    .pipe(gulp.dest('./public/css'))
})

// Copia el contenido de los estáticos e default.html al directorio
// de producción sin tags de comentarios
gulp.task('copy', function(){
  gulp.src('./app/**/*.html')
    .pipe(useref())
    .pipe(gulp.dest('./public'))
  gulp.src('./app/images/**')
    .pipe(gulp.dest('./public/images'))
})

gulp.task('watch', function(){
  livereload.listen()
  gulp.watch(['./app/**/*.html'], ['html'])
  gulp.watch(paths.compass, ['compass', 'inject'])
  gulp.watch(['./app/js/**/*.js'], ['jshint', 'inject'])
  // gulp.watch(['./bower.json'], ['wiredep'])
})

gulp.task('default', ['inject', 'watch'])
// gulp.task('default', ['inject', 'wiredep', 'watch'])
gulp.task('dev', ['watch'])
gulp.task('bower', ['wiredep'])

gulp.task('build', ['compress', 'copy', 'uncss'])

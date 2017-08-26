var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');


gulp.task('sass', function() {
  
    return gulp.src('_scss/*scss').pipe(sass()).pipe(gulp.dest('css'));
    
});

gulp.task('scripts', function() { 
    return gulp.src('_js/*.js')
           .pipe(concat('all.js'))
           .pipe(gulp.dest('js'))
           .pipe(uglify())
           .pipe(gulp.dest('js'));
});


gulp.task('watch', function(){
    
   gulp.watch('_js/*.js', ['scripts']);
   gulp.watch('_scss/*.scss', ['sass']);
   
});

gulp.task('default', ['watch']);


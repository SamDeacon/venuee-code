var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function(){
  return gulp.src('sass/mystyle.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('css'))
});

gulp.task('watch', function(){
  gulp.watch('sass/**/*.scss', ['sass']); 
  // Other watchers
})
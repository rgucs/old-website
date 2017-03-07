var gulp = require("gulp"),
  sass = require("gulp-sass"),
  notify = require("gulp-notify");

var config = {
  sassPath: "./styles",
  bowerPath: "./bower_components",
  outputPath: "./public/css"
};

gulp.task("css", function() {
  return gulp.src(config.sassPath + "/main.scss")
    .pipe(sass({
      outputStyle: "compressed",
      includePaths: [
        config.sassPath,
        config.bowerPath + "/bootstrap-sass/assets/stylesheets",
      ]
    })
    .on("error", notify.onError(function(error) {
      return "Error:"  +  error.message;
    })))
    .pipe(gulp.dest(config.outputPath));
});

gulp.task('watch', function() {
  gulp.watch(config.sassPath + '/**/*.scss', ['css']);
});

gulp.task('default', ['css']);
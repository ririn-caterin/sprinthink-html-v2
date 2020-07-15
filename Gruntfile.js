const sass = require("node-sass");

module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    // configure sass for styling sheet -----------------------------------
    sass: {
      dist: {
        options: {
          implementation: sass,
          sourceMap: true,
          outputStyle: "compressed"
        },
        files: {
          "assets/css/main.min.css": "assets/scss/main.scss"
        }
      }
    },

    // configure autoprefixer for css -----------------------------------
    autoprefixer: {
      dist: {
        options: {
          map: true,
          browsers: ["last 2 version", "ie 8"]
        },
        files: {
          "assets/css/main.min.css": "assets/css/main.min.css"
        }
      }
    },

    // configure uglify for minified and bundled js -----------------------------------
    uglify: {
      dist: {
        options: {
          sourceMap: false
        },
        files: {
          "assets/js/main.min.js": "assets/js-dev/main.js"
        }
      }
    },

    // configure watch task -----------------------------------
    watch: {
      javascript: {
        files: ["assets/js-dev/*.js"],
        tasks: ["uglify:dist"]
      },
      scripts: {
        files: ["assets/scss/**/*.scss","assets/scss/*.scss"],
        tasks: ["sass", "autoprefixer"]
      }
    }
  });

  grunt.registerTask("default", ["watch"]);

  grunt.loadNpmTasks("grunt-sass");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-autoprefixer");
};

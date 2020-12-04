"use strict";

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON("package.json"),
    banner: "/**\n" +
      " * @file <%= pkg.name %>\n" +
      " * @version <%= pkg.version %>\n" +
      " * @author <%= pkg.author %>\n" +
      " * @license <%= pkg.license %>\n" +
      " */\n",

    // Task configuration.
    uglify: {
      options: {
        banner: "<%= banner %>"
      },
      dist: {
        files: [
          {
            src: "dist/<%= pkg.name %>.js",
            dest: "dist/<%= pkg.name %>.min.js"
          }
        ]
      }
    },
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks("grunt-contrib-uglify");

  // Default task.
  grunt.registerTask("default", ["uglify"]);
};

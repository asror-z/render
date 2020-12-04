module.exports = function (grunt) {
    
    grunt.config.init({
        // Metadata
        pkg: grunt.file.readJSON('package.json'),
        // TODO: #44! repair (the request to a lib owner is sended)
        // doesn't work the icomoon-phantomjs library
        font: {
          all: {
            // SVG files to reed in
            src: ['svg-icons/*.svg'],

            // Location to output CSS variables
            destCss: 'css/icons.styl',

            // Location to output fonts (expanded via brace expansion)
            destFonts: 'fonts/icons.{svg,woff,eot,ttf}',


            // OPTIONAL: Specify CSS format (inferred from destCss' extension by default)
                // (stylus, less, scss, json)
            cssFormat: 'json',

            // Optional: Custom naming of font families for multi-task support
            fontFamily: 'my-icon-font',

            // OPTIONAL: Specify CSS options
            cssOptions: {}
          }
        }
    });

    grunt.registerTask('default', ['font']);

    grunt.loadNpmTasks('grunt-fontsmith');
};
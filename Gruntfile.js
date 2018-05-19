
module.exports = function(grunt){

  grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),

  //sass task
  sass: {
    dist: {
      options: {
        style: 'expanded'
      },
      files: {
        'css/style.css': 'build/sass/main.scss'
        //'widgets.css': 'widgets.scss'
      }
    }
  },

  //autoprefixer task
  autoprefixer:{
    options:{
        // We need to `freeze` browsers versions for testing purposes.
        browsers: ['opera 12', 'ff 15', 'chrome 25']
    },
    //
    // single_file: {
    //     src: 'test/fixtures/gradient.css',
    //     dest: 'tmp/single_file.css'
    // },
    multiple_files: {
      src: 'css/*.css',
      dest: 'css/'
    }
  },

  //watch tasks
  watch: {
    options:{
      livereload:false
    },
    scss: {
      files: ['build/sass/**/*'],
      tasks: ['sass']
    }

  }
});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-autoprefixer');
grunt.loadNpmTasks('grunt-contrib-watch');

grunt.registerTask('default', ['watch']);
grunt.registerTask('call_sass', 'sass');
}

module.exports = function(grunt) {
  // # Project configuration
  ////////////////////////////////////////
  ////////////////////////////////////////
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // File watcher.
    watch: {
      options: {
        spawn: false,
      },
      build: {
        files: [
          'src/**/*.php',
          'src/static/scss/**/*.scss',
        ],
        tasks: ['build'],
      },
    },

    // Clean up build files to prevent any conflicts.
    clean: {
      build: ['build/'],
    },

    // Compile source .php files to .html build files.
    php2html: {
      options: {
        processLinks: true,
        htmlhint: false,
        docroot: 'src',
      },
      build: {
        expand: true,
        cwd: 'src',
        src: ['index.php'],
        dest: 'build',
        ext: '.html',
      },
    },

    // Compile source .scss files to .css build files.
    sass: {
      build: {
        options: {
          style: 'expanded',
          precision: 3,
        },
        files: {
          'build/static/css/style.css' : 'src/static/scss/style.scss',
        },
      },
    },

    // CSS post-processes.
    postcss: {
      build: {
        options: {
          map: false,
          processors: [
            // Remove unused .css rules.
            require('postcss-uncss')({
              html: ['build/index.html'],
            }),
            // Minify .css file.
            require('cssnano')(),
          ],
        },
        src: 'build/static/css/style.css',
        dest: 'build/static/css/style.css',
      },
    },

    // Inlines styles from a linked / separate .css files into .html file.
    // Also embeds linked .css files into .html.
    inlinecss: {
      build: {
        options: {
          removeStyleTags: false,
        },
        files: {
          'build/index.html': 'build/index.html',
        },
      },
    },

    // Synchronised browser-testing for development.
    browserSync: {
      dev: {
        bsFiles: {
          src: [
            'build/static/css/*.{css}',
            'build/*.{html}',
          ],
        },
        options: {
          server: 'build',
          port: 5000,
          watchTask: true,
          watchEvents: [
            'add',
            'change',
            'unlink',
            'addDir',
            'unlinkDir',
          ],
        },
      },
    },
  });

  // # Load plugins
  ////////////////////////////////////////
  ////////////////////////////////////////
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-php2html');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-inline-css');

  // # Tasks
  ////////////////////////////////////////
  ////////////////////////////////////////
  grunt.registerTask('build', [
    'clean',
    'php2html',
    'sass',
    'postcss',
    'inlinecss',
  ]);
  grunt.registerTask('default', [
    'build',
    'browserSync',
    'watch',
  ]);
};

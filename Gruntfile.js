module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                sourcemap: 'none'
            },
            dist: {
                files: {
                    'css/tna-base.css': 'sass/base-sass.scss'
                }
            }
        },
        cssmin: {
            options: {
                sourceMap: true
            },
            target: {
                files: {
                    'css/tna-base.css.min': ['css/tna-base.css']
                }
            }
        },
        watch: {
            css: {
                files: 'sass/*.scss',
                tasks: ['sass', 'cssmin']
            },
            scripts: {
                files: 'js/*.js',
                tasks: ['concat', 'uglify']
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['js/lib/jquery-1.10.2.min.js', 'js/lib/jquery-ui/jquery-ui.min.js', 'js/src/command-papers.js'],
                dest: 'js/dist/script.js'
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'js/dist/script.min.js': ['js/dist/script.js']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Default task(s).
    grunt.registerTask('default', ['sass', 'cssmin', 'concat', 'uglify', 'watch']);

};
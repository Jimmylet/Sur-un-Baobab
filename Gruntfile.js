/*
 * /Gruntfile.js - Grunt configuration file
 *
 * Created by Jimmy Letecheur!
 * started at 02/04/2016
 */

"use strict";

var poststylus = function() {
  return require('poststylus')(['autoprefixer'])
};

module.exports = function( grunt ) {

    // 1. load tasks
    grunt.loadNpmTasks( "grunt-contrib-watch" );
    grunt.loadNpmTasks( "grunt-cowsay" );
    grunt.loadNpmTasks( "grunt-eslint" );
    grunt.loadNpmTasks('grunt-contrib-stylus');

    //grunt.loadNpmTasks( "grunt-sass" );

    // 2. configure tasks
    grunt.initConfig( {
        // browser sync
        "browserSync": {
            "preview": {
                "bsFiles": {
                    "src": "css/*.css"
                },
                "options": {
                    "proxy": "localhost:60605", // TODO: adapt to you configuration
                    "watchTask": true
                }
            }
        },
        //live reload

        // cowsay
        "cowsay": {
            "done": {
                "options": {
                    "message": "I'm done!"
                }
            }
        },
        // eslint
        "eslint": {
            "options": {
                "configFile": ".eslintrc.json"
            },
            "scripts": [ "scripts/**/*.js" ]
        },
        // stylus
        "stylus": {
            "options": {
                "compress": false,
                use: [
                function() { return require('autoprefixer-stylus')('last 7 versions', 'ie 8'); },
                require("kouto-swiss")
                ],
                "sourceMap": true
            },
            "styles": {
                "files": {
                    "www/css/styles.css": "www/stylus/styles.styl"
                }
            }
        },
        // watch
        "watch": {
            "options": {
                "spawn": false
            },
            "scripts": {
                "files": [ "scripts/**/*.js" ],
                "tasks": [ "eslint" ]
            },
            "styles": {
                "files": [ "www/stylus/**/*.styl" ],
                "tasks": [ "stylus:styles" ],
                options: {
                    livereload: {
                        host: 'localhost',
                        port: 35729
                    }
                }
            }
        }
    } );

    // 3. aliases
    grunt.registerTask( "default", [
        "build",
        "analyse",
        "cowsay:done"
    ] );

    grunt.registerTask( "build", [ "stylus:styles" ] );

    grunt.registerTask( "analyse", [ "eslint:scripts" ] );

    grunt.registerTask( "work", [
        "build",
        "analyse",
        "watch"
    ] );
};

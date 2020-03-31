module.exports = function( grunt ) {

	grunt.loadNpmTasks( 'grunt-contrib-sass' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );
	grunt.renameTask( 'concat', 'concatCssCommon' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );
	grunt.renameTask( 'concat', 'concatJsCommon' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );
	grunt.renameTask( 'concat', 'concatJsLanding' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );
	grunt.renameTask( 'concat', 'concatJsPublic' );
	grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
	grunt.loadNpmTasks( 'grunt-contrib-uglify' );
	grunt.loadNpmTasks( 'grunt-contrib-copy' );

    grunt.initConfig({
        pkg: grunt.file.readJSON( 'package.json' ),
		sass: {
			dist: {
				options: {
					style: 'expanded',
					loadPath: [ '../../../../../projects-vc/css/cmt-ui/breeze/src/scss', '../../../../../projects-vc/css/cmt-ui/breeze-templates/src/scss' ]
				},
				files: {
					'../web/assets/styles/landing-20200101-src.css': '../web/resources/styles/scss/landing.scss',
					'../web/assets/styles/public-20200101-src.css': '../web/resources/styles/scss/public.scss'
				}
			}
		},
        concatCssCommon: {
      		options: {
        		separator: '\n\n'
      		},
      		dist: {
        		src: [
					'../vendor/bower-asset/cmt-breeze-icons/dist/css/breeze-icons-core.min.css',
					'../vendor/bower-asset/cmt-breeze-icons/dist/css/breeze-icons-brand.min.css',
					//'../vendor/bower-asset/cmt-breeze-icons/dist/css/breeze-icons-currency.min.css',
					'../vendor/bower-asset/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css',
					'../vendor/bower-asset/hover/css/hover-min.css',
					'../vendor/bower-asset/animate.css/animate.min.css',
					'../vendor/bower-asset/aos/dist/aos.css'
				],
        		dest: '../web/assets/styles/common-20200101-src.css'
      		}
    	},
		concatJsCommon: {
      		options: {
        		separator: '\n\n'
      		},
      		dist: {
        		src: [
					'../vendor/bower-asset/jquery/dist/jquery.min.js',
					'../vendor/bower-asset/jquery-ui/jquery-ui.min.js',
					'../vendor/bower-asset/imagesloaded/imagesloaded.pkgd.min.js',
					'../vendor/bower-asset/aos/dist/aos.js',
					'../web/resources/scripts/vendor/smooth.js',
					'../vendor/bower-asset/cmt-velocity/dist/velocity.js',
					'../vendor/bower-asset/cmt-velocity/src/solo/lazy.js',

					'../vendor/bower-asset/cmt-velocity-apps/src/apps/core/base.js',
					//'../vendor/bower-asset/cmt-velocity-apps/src/apps/core/grid.js',
					'../vendor/bower-asset/cmt-velocity-apps/src/apps/core/autoload.js',
					'../vendor/bower-asset/cmt-velocity-apps/src/apps/core/controllers/site.js'
				],
        		dest: '../web/assets/scripts/common-20200101-src.js'
      		}
    	},
        concatJsLanding: {
      		options: {
        		separator: '\n\n'
      		},
      		dist: {
        		src: [
					'../web/resources/scripts/apps/core/base.js',
					'../web/resources/scripts/apps/core/controllers/site.js',
					'../web/resources/scripts/main.js',
					'../web/resources/scripts/popups.js',
					'../web/resources/scripts/landing.js'
				],
        		dest: '../web/assets/scripts/landing-20200101-src.js'
      		}
    	},
        concatJsPublic: {
      		options: {
        		separator: '\n\n'
      		},
      		dist: {
        		src: [
					'../web/resources/scripts/apps/core/base.js',
					'../web/resources/scripts/apps/core/controllers/site.js',
					'../web/resources/scripts/main.js',
					'../web/resources/scripts/popups.js',
					'../web/resources/scripts/public.js'
				],
        		dest: '../web/assets/scripts/public-20200101-src.js'
      		}
    	},
    	cssmin: {
			options: {

			},
      		target: {
	        	files: {
					'../web/assets/styles/common-20200101.css': [ '../web/assets/styles/common-20200101-src.css' ],
					'../web/assets/styles/landing-20200101.css': [ '../web/assets/styles/landing-20200101-src.css' ],
					'../web/assets/styles/public-20200101.css': [ '../web/assets/styles/public-20200101-src.css' ]
	        	}
      		}
    	},
    	uglify: {
			options: {

			},
      		main_target: {
	        	files: {
					'../web/assets/scripts/common-20200101.js': [ '../web/assets/scripts/common-20200101-src.js' ],
					'../web/assets/scripts/landing-20200101.js': [ '../web/assets/scripts/landing-20200101-src.js' ],
					'../web/assets/scripts/public-20200101.js': [ '../web/assets/scripts/public-20200101-src.js' ]
	        	}
      		}
    	},
		copy: {
			main: {
				files: [
					{ expand: true, cwd: '../vendor/bower-asset/cmt-breeze-icons/dist/fonts/breeze/', src: ['**'], dest: '../web/assets/fonts/breeze/', filter: 'isFile' },
					{ expand: true, cwd: '../vendor/bower-asset/fontawesome/web-fonts-with-css/webfonts/', src: ['**'], dest: '../web/assets/webfonts/', filter: 'isFile' },
					{ expand: true, cwd: '../web/resources/fonts/opensans/', src: ['**'], dest: '../web/assets/fonts/opensans/', filter: 'isFile' }
				]
			}
		}
    });

	grunt.registerTask( 'default', [ 'sass', 'concatCssCommon', 'concatJsCommon', 'concatJsLanding', 'concatJsPublic', 'cssmin', 'uglify', 'copy' ] );
};

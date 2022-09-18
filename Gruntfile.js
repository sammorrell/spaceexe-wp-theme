module.exports = function(grunt) {

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				files : [{
					expand: true,
					cwd: 'scss',
					src: ['styles.scss'],
					dest: './css',
					ext: '.css'
				}]
			}
		},
		watch: {
			css: {
				files: 'scss/*.scss',
				tasks: ['sass']
			}
		}
	});

	grunt.registerTask('default', ['sass', 'watch']);
};

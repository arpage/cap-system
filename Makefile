#
#
#

cr:
	lando drush cr

start:
	lando start

stop:
	lando stop

init:
	lando robo project:init

destroy:
	lando destroy -y

bootstrap: stop destroy start init

icky:
	sudo rm -rf webroot/.gitignore  webroot/modules/.gitignore webroot/profiles/ webroot/sites/ webroot/themes/.gitignore
	cd webroot && rm .csslintrc .eslint* .ht* README.md INSTALL.txt autoload.php example.gitignore index.php modules/README.txt robots.txt themes/README.txt update.php web.config

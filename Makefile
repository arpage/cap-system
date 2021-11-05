#
#
#

start:
	lando start

stop:
	lando stop

init:
	lando robo project:init

destroy:
	lando destroy -y

bootstrap: stop destroy start init

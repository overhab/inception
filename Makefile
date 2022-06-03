all:
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env up -d

down:
	docker-compose -f ./srcs/docker-compose.yml down

clean :			down
	@bash ./srcs/requirements/scripts/clean.sh

config:
	docker-compose -f ./srcs/docker-compose.yml config

re: clean all

.PHONY:			all down clean config re

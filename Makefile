DOCKER_COMPOSE_FILE = ./srcs/docker-compose.yml

all:	up

up:
	mkdir -p /home/ahuber/data/wordpress
	mkdir -p /home/ahuber/data/mariadb
	sudo docker-compose -f $(DOCKER_COMPOSE_FILE) --env-file ./srcs/.env up -d --build

stop:
	sudo docker-compose -f $(DOCKER_COMPOSE_FILE) stop

clean: stop
	sudo docker rm mariadb
	sudo docker rm wordpress
	sudo docker rm nginx
	sudo docker volume rm srcs_mariadb-volume
	sudo docker volume rm srcs_wordpress-volume
	sudo rm -rf /home/ahuber/data
	sudo docker network rm srcs_docker-network

re: rm all

.PHONY: all up stop rm re

.PHONY: all
all: create_dirs up

create_dirs:
	mkdir -p /home/msaka/data/mariadb_data
	mkdir -p /home/msaka/data/wordpress_data

.PHONY: up
up:
	docker-compose -f ./srcs/docker-compose.yml up --build

.PHONY: down
down:
	docker-compose -f ./srcs/docker-compose.yml down

.PHONY: status
status:
	docker ps
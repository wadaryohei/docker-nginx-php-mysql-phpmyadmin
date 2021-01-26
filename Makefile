ENV=dev #デフォルトではdevを指定しておく

up: pre
		docker-compose --env-file ./config/config.$(ENV).env up -d

down: pre
		docker-compose down --env-file ./config/config.$(ENV).env up -d

destroy: pre
		docker-compose down --rmi all --volumes --remove-orphan && \
		docker container ls -aq | xargs docker container rm -fs && \
		docker images -aq | xargs docker rmi

build: pre
		docker-compose build

rebuild: pre
		docker-compose build --no-cache

pre:
ifdef e
ENV=${e}
endif

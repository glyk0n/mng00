Título
========

## Structure

```bash
mng00/
	|- .docker
	|	|- docker-compose.yaml
	|- public/
	|	|- index.php
	|- composer.phar
	|- README.md
	|- sftp-config.json
```

## docker-compose.yaml

```docker-compose
version: '2'

services:
    mng:
        build:
            context: ..
        image: php:7-alpine
        working_dir: /var/www
        command: php -S 0.0.0.0:8080 -t public
        environment:
            docker: "true"
        ports:
            - 8080:8080
        volumes:
            - ..:/var/www
            - ../logs:/var/www/logs
volumes:
    logs:
        driver: local
```

## Getting started

```sh
$ docker-compose -f .docker/docker-compose up -d
```

## Initialize project

```sh
$ docker exec -it docker_mng_1 sh


/var/www# export http_proxy=***
/var/www# export https_proxy=***
/var/www# php composer.phar require monolog/monolog


```

Accesible desde `http://127.0.0.1:8080`.


## Structure

```bash
mng00/
	|- composer.json
	|- composer.lock 		X
	|- composer.phar
	|- .docker
	|	|- docker-compose.yaml
	|- logs/				X
	|- public/
	|	|- index.php
	|- composer.phar
	|- README.md
	|- vendor/				X
	|- sftp-config.json 	X
```

Nota: X siginifica que son archivos/directorios que se añaden a .gitignore
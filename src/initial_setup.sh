#!/bin/bash

docker-compose run app cp .env_example .env
docker-compose run app composer install
docker-compose run app php artisan key:generate
docker-compose run app php artisan migrate

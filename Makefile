SHELL := /bin/bash

install:
	composer install
	cp .env.example .env
	php artisan key:generate

test:
	./vendor/bin/phpunit

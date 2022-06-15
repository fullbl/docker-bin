#!/bin/sh
export PATH=/sbin:/bin:/usr/sbin:/usr/bin:/usr/local/sbin:/usr/local/bin
docker run --user $(id -u):$(id -g) -i --rm -v ${pwd}:/app -w /app php:7-cli-alpine php "$@"

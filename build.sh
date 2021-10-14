#!/usr/bin/env bash
set -eu

docker pull node:latest
docker build -t tempcontainerz-node --file ./Dockerfile.node .

docker pull php:apache
docker build -t tempcontainerz-php --file ./Dockerfile.php .

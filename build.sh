#!/usr/bin/env bash
set -eu

docker build -t tempcontainerz-node --file ./Dockerfile.node .

docker build -t tempcontainerz-php --file ./Dockerfile.php .

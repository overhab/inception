#!bin/bash

docker stop  $(docker ps -a -q)
docker rm  $(docker ps -a -q -f)
docker rmi -f $(docker images -q)
docker volume rm $(docker volume ls -q)
docker network rm $(docker network ls -q)

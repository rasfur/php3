#!/usr/bin/env bash
docker run -it --link `docker ps|grep mysql:5.5|awk '{print $1}'`:mysql --rm mysql sh -c 'exec mysql -h"$MYSQL_PORT_3306_TCP_ADDR" -P"$MYSQL_PORT_3306_TCP_PORT" -uroot -p"$MYSQL_ENV_MYSQL_ROOT_PASSWORD"'
# docker run -i --link `docker ps|grep mysql:5.5|awk '{print $1}'`:mysql --rm mysql sh -c 'exec mysql -h"$MYSQL_PORT_3306_TCP_ADDR" -P"$MYSQL_PORT_3306_TCP_PORT" -uroot -p"$MYSQL_ENV_MYSQL_ROOT_PASSWORD" eshop' < eshop/eshop.sql
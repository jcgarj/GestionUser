#!/bin/sh
echo "============================================================"
echo "||                 Creado por Alexis Leon                 ||"
echo "============================================================"
sudo su -
sudo rm -fr app/cache/*
sudo rm -fr app/logs/*
chmod 777 -R web
chmod 777 -R app/cache
chmod 777 -R app/logs
php app/console assets:install
php app/console doctrine:schema:update --dump-sql
php app/console doctrine:schema:update --force
sudo rm -fr app/cache/*
sudo rm -fr app/logs/*
echo "TERMINADO!"
echo "============================================================"
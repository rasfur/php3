#!/usr/bin/env bash
sudo chmod -R 777 *
sudo echo '''127.0.0.1 php www.php''' >>/etc/hosts
docker-compose up -d
python -m webbrowser -t "http://php/"
#!/usr/bin/env bash
sudo chmod -R 777 *
docker-compose up -d
python -m webbrowser -t "http://php/"
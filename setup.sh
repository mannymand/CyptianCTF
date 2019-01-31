#!/bin/bash
apt-get update
apt-get install ufw -y
ufw disable
ufw allow ssh
ufw allow http
ufw allow to any port 3306
ufw enable
#!/bin/bash
sudo apt update -y
sudo apt install -y nginx php php-fpm php-mysql unzip
sudo systemctl enable nginx
sudo systemctl enable php-fpm
sudo systemctl restart nginx
sudo systemctl restart php-fpm

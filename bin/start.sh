#!/bin/bash

# Execute php-fpm
/usr/local/sbin/php-fpm -y /usr/local/etc/php-fpm.d/www.conf

# Start Nginx
/etc/init.d/nginx start

# Keep the container running if you run as daemon
while true; do
    echo "Press [CTRL+C] to stop.."
    sleep 1
done
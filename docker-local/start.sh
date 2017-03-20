#!/bin/sh

# Install application dependencies.
cd /var/www/html/
/usr/bin/composer install

# Start serving.
/usr/sbin/apache2ctl -DFOREGROUND
# php -S 0.0.0.0:80 -t /var/www/html/

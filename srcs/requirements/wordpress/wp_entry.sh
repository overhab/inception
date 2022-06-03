#!bin/sh

echo "listen = 9000" >> /etc/php7/php-fpm.d/www.conf
sed -i "s/user_name/$DB_USER/" /var/www/html/wordpress/wp-config.php
sed -i "s/database_name/$DB_NAME/" /var/www/html/wordpress/wp-config.php
sed -i "s/user_password/$DB_PASSWORD/" /var/www/html/wordpress/wp-config.php
sed -i "s/host_name/$DB_HOST/" /var/www/html/wordpress/wp-config.php
chmod 644 /var/www/html/wordpress/wp-config.php
exec "$@"

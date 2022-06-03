#!/bin/sh

openrc
touch /run/openrc/softlevel
/etc/init.d/mariadb setup
rc-service mariadb start

cat << EOF > /var/tmpfile
CREATE USER IF NOT EXISTS 'root'@'%' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE;
CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
GRANT ALL ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';
GRANT ALL ON *.* TO 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD';
FLUSH PRIVILEGES;
EOF

mysql < /var/tmpfile
rm /var/tmpfile

mysql -u root --password=$MYSQL_ROOT_PASSWORD $MYSQL_DATABASE < /var/wordpress.sql

mysql_secure_installation <<EOF
$MYSQL_ROOT_PASSWORD
n
y
$MYSQL_ROOT_PASSWORD
$MYSQL_ROOT_PASSWORD
y
y
y
y
EOF
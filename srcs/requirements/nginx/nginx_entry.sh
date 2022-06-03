#!bin/sh

openssl req -x509 -nodes -days 365 -subj \
"/C=RU/ST=Russia/L=Moscow/O=School21/OU=kasalexa/CN=kasalexa.42.fr" \
-newkey rsa:2048 -keyout /etc/ssl/kasalexa.key -out /etc/ssl/kasalexa.crt
exec "$@"

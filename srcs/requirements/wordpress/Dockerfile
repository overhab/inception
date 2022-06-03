FROM alpine:3.15

ARG	DB_NAME
ARG	DB_USER
ARG	DB_PASSWORD
ARG	DB_HOST

RUN mkdir -p /var/www/html/wordpress && \
	chmod 755 var && \
	chmod 755 /var/www && \
	chmod 755 /var/www/html

RUN	apk update && \
	apk add php7 php7-fpm php7-opcache php-mysqli php php-phar php-curl php-dom php-exif php-fileinfo php-json php-mbstring php-sodium php-openssl php-xml php-zip && \
	apk add wget vim tar && \
	rm /var/cache/apk/*

RUN wget https://wordpress.org/latest.tar.gz && \ 
	tar -xvf latest.tar.gz && \ 
	mv /wordpress/* /var/www/html/wordpress/ && \  
	rm -rf /wordpress latest.tar.gz

COPY ./wp-config.php /var/www/html/wordpress/
COPY ./wp_entry.sh /var/www/
RUN	chmod +x /var/www/wp_entry.sh

EXPOSE 9000

ENTRYPOINT [ "/var/www/wp_entry.sh" ]
CMD ["/usr/sbin/php-fpm7", "--nodaemonize"]

FROM alpine:3.15

ARG	MYSQL_USER
ARG	MYSQL_ROOT_PASSWORD
ARG	MYSQL_PASSWORD
ARG	MYSQL_DATABASE

RUN	apk update && apk upgrade && \
	apk add mysql && \
	apk add mariadb && \
	apk add mariadb-client && \
	apk add openrc && \
	rm /var/cache/apk/*

COPY ./init_db.sh /var/www/
COPY ./wordpress.sql /var/
COPY ./run.sh /var/www/
RUN chmod +x /var/www/init_db.sh && \
	chmod +x /var/www/run.sh && \
	sh /var/www/init_db.sh && \
	chmod 755 /var/lib/mysql

EXPOSE 3306

CMD ["./var/www/run.sh"]

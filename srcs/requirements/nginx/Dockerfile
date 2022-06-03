FROM alpine:3.15

RUN	apk update && \
	apk add nginx openssl && \
	rm /var/cache/apk/*

RUN mkdir -p /run/nginx && \
	chmod -R 755 /run/nginx

COPY ./default.conf /etc/nginx/http.d/
COPY ./nginx_entry.sh /var/www/
RUN	chmod +x /var/www/nginx_entry.sh

EXPOSE 443

ENTRYPOINT [ "/var/www/nginx_entry.sh" ]
CMD ["nginx", "-g", "daemon off;"]

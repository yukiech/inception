FROM	debian:buster

RUN		apt-get update
RUN		apt-get install -y nginx openssl
RUN		mkdir -p /var/logs
RUN		mkdir -p /etc/nginx/ssl
RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/nginx-self-signed.key -out /etc/nginx/nginx-self-signed.crt -subj "/C=CH/L=Lausanne/O=42/CN=ahuber.42.fr/UID=ahuber"
COPY	./conf/nginx.conf /etc/nginx/conf.d/
EXPOSE 443

CMD	["nginx", "-g", "daemon off;"]

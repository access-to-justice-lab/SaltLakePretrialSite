FROM php:7.2-apache

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt install unattended-upgrades -y
RUN apt-get install certbot python-certbot-apache -y

#docker build -t slc_server .
#docker run -idt -p 80:80 -p 443:443 --name slc_site -v ${PWD}/website:/var/www slc_server
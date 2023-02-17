FROM    adminer:latest
USER    root
COPY	www/.   /var/www/html/
COPY    uploads.ini  /usr/local/etc/php/conf.d/uploads.ini
RUN     chmod   777     /var/www/html   -R 

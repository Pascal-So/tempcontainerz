FROM php:apache

# A php server with mod-rewrite enabled.

# Mount your applicaton root to /var/www/html
# to serve it on port 80.

SHELL ["/bin/bash", "-c"]
RUN ln -s ../mods-available/{expires,headers,rewrite}.load /etc/apache2/mods-enabled/
RUN sed -e '/<Directory \/var\/www\/>/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' -i /etc/apache2/apache2.conf

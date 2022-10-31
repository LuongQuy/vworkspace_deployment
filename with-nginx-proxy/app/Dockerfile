FROM nextcloud:25.0.0

COPY transifexconf/* /root/

COPY transifexconf/.tx /usr/src/nextcloud/.tx

RUN	\
	apt-get update; \
	apt-get install -y gettext transifex-client;

WORKDIR /usr/src/nextcloud

RUN tx pull -l vi;

COPY translationtool.phar /usr/src/nextcloud/

RUN php translationtool.phar convert-po-files;


COPY *.sh upgrade.exclude /

COPY theme /usr/src/nextcloud/themes/vworkspace_theme

WORKDIR /var/www/html

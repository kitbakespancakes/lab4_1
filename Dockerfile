FROM alpine 
RUN apk add php
RUN apk update php
COPY proga.php /home/proga.php
WORKDIR /home
ENTRYPOINT ["php"]
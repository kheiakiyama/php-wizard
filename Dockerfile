FROM isag17/docker-composer:latest

ENV APP_HOME /var/www/html

#copy project
COPY . $APP_HOME

RUN find $APP_HOME -type d -exec chmod 755 {} \;
RUN find $APP_HOME -type f -exec chmod 644 {} \;

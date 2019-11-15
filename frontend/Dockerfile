FROM yiisoftware/yii2-php:7.2-apache

# Change document root for Apache
# RUN sed -i -e 's|/app/web|/app/backend/web|g' /etc/# apache2/sites-available/000-default.conf

# Откроем 80 порт
EXPOSE 80
# Откроем 8080 порт
EXPOSE 8080

# Добавим в контейнер конфигурационный файл php.ini, расположим его на стаднатрном для ubuntu месте
ADD ./docker/conf/php/php.ini /etc/php/7.2/apache2/php.ini

# Добавим конфигурации xdebug
ADD ./docker/conf/php/xdebug.ini /etc/php/7.2/mods-available/xdebug.ini

# Добавим в контейнер конфигурационный файл для apache, расположим его на стаднатрном для ubuntu месте
ADD ./docker/conf/apache/apache2.conf /etc/apache2/apache2.conf

# удалим содержащиеся файлы в этих папках, потому что вскоре там будут наши
RUN rm -R /etc/apache2/sites-enabled/* /etc/apache2/sites-available/* /var/www/*

# укажим дирректорию /var/www как рабочую
WORKDIR /var/www

# запускаем процес apache2 в нормальном режиме (На переднем плане).
# Пока живет это процесс, живет и контейнер.
# CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
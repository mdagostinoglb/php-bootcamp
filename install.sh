#!/bin/bash

set -o nounset
set -o errexit


MYSQL_ROOT_PASS="root"

APACHE_USER="www-data"

# ----------------------------------------------------------------------------
# Install packages.
# ----------------------------------------------------------------------------

# Get things up to date.
apt-get update
apt-get upgrade -y

# We need a UUID package for this script.
apt-get install -y uuid

# Install necessary packages for a LAMP server.
#
# These lines prevent the mysql installation from derailing things by prompting
# for input.
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password ${MYSQL_ROOT_PASS}"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password ${MYSQL_ROOT_PASS}"
apt-get install -y lamp-server^

apt-get install -y \
  curl \
  php-apc \
  php-pear \
  php5-cli \
  php5-curl \
  php5-dev \
  php5-gd \
  php5-imagick \
  php5-imap \
  php5-mcrypt \
  php5-mysqlnd \
  php5-pspell \
  php5-tidy \
  php5-xmlrpc

php5enmod \
  apcu \
  curl \
  gd \
  imagick \
  imap \
  mcrypt \
  mysqlnd \
  pspell \
  tidy \
  xmlrpc


# ----------------------------------------------------------------------------
# Apache2 configuration.
# ----------------------------------------------------------------------------

# Some of the needed modules are not enabled by default, so enable them.
a2enmod \
  expires \
  headers \
  rewrite \
  ssl

# Remove insecure ciphers and protocols and enable perfect forward secrecy if
# all parties support it.
# See: https://hynek.me/articles/hardening-your-web-servers-ssl-ciphers/
sed -i \
   's/^\(\s*\)#\?\s*SSLProtocol.*/\1SSLProtocol ALL -SSLv2 -SSLv3/' \
  /etc/apache2/mods-available/ssl.conf
sed -i \
  's/^\(\s*\)#\?\s*SSLHonorCipherOrder\s.*/\1SSLHonorCipherOrder On/' \
  /etc/apache2/mods-available/ssl.conf
sed -i \
  's/^\(\s*\)#\?\s*SSLCipherSuite\s.*/\1SSLCipherSuite ECDH+AESGCM:DH+AESGCM:ECDH+AES256:DH+AES256:ECDH+AES128:DH+AES:ECDH+3DES:DH+3DES:RSA+AESGCM:RSA+AES:RSA+3DES:!aNULL:!MD5:!DSS/' \
  /etc/apache2/mods-available/ssl.conf

# ----------------------------------------------------------------------------
# PHP configuration.
# ----------------------------------------------------------------------------

# Turn off the expose_php setting.
sed -i "s/expose_php =.*/expose_php = Off/" /etc/php5/apache2/php.ini

# Install composer
cd /tmp
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

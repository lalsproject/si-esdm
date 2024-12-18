#!/bin/bash

# Update system
sudo apt-get update

# Install MariaDB 10
sudo apt-get install -y mariadb-server mariadb-client

# Install PHP 7.4 and necessary extensions
sudo apt-get install -y software-properties-common
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.4 php7.4-cli php7.4-mysql php7.4-xml php7.4-curl php7.4-mbstring php7.4-zip

# Start MariaDB service
# sudo /etc/init.d/mysql start

sudo mysqld_safe --skip-grant-tables --skip-networking &
sudo mariadb -u root
FLUSH PRIVILEGES;
ALTER USER root@localhost IDENTIFIED BY '12345678';
FLUSH PRIVILEGES;
exit

sudo mysqladmin -u root -p shutdown


# Install Apache and set up PHP
sudo apt-get install -y apache2 libapache2-mod-php7.4
sudo /etc/init.d/apache2 restart


# Enable mod_rewrite for Apache
sudo a2enmod rewrite
sudo /etc/init.d/apache2 restart

# Move project to Apache web directory
sudo rm -rf /var/www/html/*
sudo ln -s /workspaces/$(basename $PWD) /var/www/html
sudo /etc/init.d/apache2 restart

echo "PHP 7.4 and MariaDB 10 setup complete!"

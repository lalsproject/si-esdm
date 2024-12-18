#!/bin/bash

# Update system
sudo apt-get update

# Install PHP 7.4 and necessary extensions
sudo apt-get install -y software-properties-common
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.4 php7.4-cli php7.4-mysql php7.4-xml php7.4-curl php7.4-mbstring php7.4-zip

# Install MariaDB 10
sudo apt-get install -y mariadb-server mariadb-client

# Start MariaDB service
sudo /etc/init.d/mysql start


# Set up MariaDB root password and database
sudo mysql -e "UPDATE mysql.user SET Password = PASSWORD('rootpassword') WHERE User = 'root';"
sudo mysql -e "DELETE FROM mysql.user WHERE User='';"
sudo mysql -e "CREATE DATABASE app_db;"
sudo mysql -e "CREATE USER 'app_user'@'localhost' IDENTIFIED BY 'app_password';"
sudo mysql -e "GRANT ALL PRIVILEGES ON app_db.* TO 'app_user'@'localhost';"
sudo mysql -e "FLUSH PRIVILEGES;"

# Install Apache and set up PHP
sudo apt-get install -y apache2 libapache2-mod-php7.4
sudo /etc/init.d/apache2 restart

# Enable mod_rewrite for Apache
sudo a2enmod rewrite
sudo /etc/init.d/apache2 restart

# Move project to Apache web directory
sudo rm -rf /var/www/html/*
sudo ln -s /workspaces/$(basename $PWD) /var/www/html
sudo systemctl restart apache2

echo "PHP 7.4 and MariaDB 10 setup complete!"

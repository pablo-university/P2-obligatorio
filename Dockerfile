# Use the official PHP image as the base image
FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP application files to the container
COPY . /var/www/html

# Install dependencies using composer (if your PHP application uses composer)
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN composer install --no-interaction --no-plugins --no-scripts

# Set up Apache configuration
RUN a2enmod rewrite
COPY apache2.conf /etc/apache2/apache2.conf

# Expose the necessary ports
EXPOSE 80

# Define environment variables for MySQL connection
ENV MYSQL_HOST=localhost \
    MYSQL_PORT=3306 \
    MYSQL_DATABASE=mydatabase \
    MYSQL_USER=myuser \
    MYSQL_PASSWORD=mypassword

# Install MySQL client
RUN apt-get update && apt-get install -y default-mysql-client

# Copy the MySQL database initialization script
COPY init.sql /docker-entrypoint-initdb.d/

# Start Apache server
CMD ["apache2-foreground"]

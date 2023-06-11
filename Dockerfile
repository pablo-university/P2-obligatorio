# Base image
FROM php:8.0-apache

# Install dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql zip

# Copy your PHP application files to the container
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]

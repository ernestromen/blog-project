# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP application code into the container
COPY ./actualapp /var/www/html

# Install PHP extensions and other dependencies
RUN apt-get update && \
    apt-get install -y curl libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd mysqli

# Expose the port Apache listens on
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]

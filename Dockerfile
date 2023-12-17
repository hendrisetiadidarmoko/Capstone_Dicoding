# Use PHP 8.1 image from Docker Hub
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/app

# Install dependencies
# Install dependencies (replace with your specific packages)
RUN apt-get update && apt-get install -y \
    mariadb-client \
    mariadb-server \
    nano \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    unzip 

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/* 
#general extention php 
RUN docker-php-ext-install gettext intl pdo_mysql mbstring exif pcntl bcmath gd 
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 admin
RUN useradd -u 1000 -ms /bin/bash -g admin admin

# Copy application directory contents selectively
# Exclude unnecessary files/directories
COPY .  /var/www/app/

# Copy application directory permissions
COPY --chown=admin:admin .  /var/www/app/

# Change current user to www
USER admin

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
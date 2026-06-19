FROM php:8.5-apache

ENV PLAYWRIGHT_BROWSERS_PATH=/opt/ms-playwright

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        zlib1g-dev \
        git \
        curl \
        nano \
        ca-certificates \
        gnupg \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) bcmath \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-install -j$(nproc) sockets \
    && curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# install composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Pre-install Playwright Chromium and OS dependencies for integration tests.
COPY example/PaymentPage/browser/package.json example/PaymentPage/browser/package-lock.json /tmp/playwright/
WORKDIR /tmp/playwright
RUN npm ci \
    && npx playwright install --with-deps chromium

WORKDIR /var/www/html

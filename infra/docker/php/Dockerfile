FROM php:8.4.5-fpm-bullseye AS base

WORKDIR /src

ARG ENV

# timezone environment
ENV TZ=UTC \
    # locale
    LANG=ja_JP.UTF-8 \
    # composer environment
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get -y install --no-install-recommends \
    locales \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && locale-gen en_US.UTF-8 \
    && localedef -f UTF-8 -i en_US en_US.UTF-8 \
    && docker-php-ext-install \
    intl \
    pdo_mysql \
    zip \
    bcmath \
    opcache

COPY ./infra/docker/php/php.ini/php.${ENV}.ini /usr/local/etc/php/php.ini
COPY ./infra/docker/php/black-list.txt /usr/local/etc/php/black-list.txt
COPY ./infra/docker/php/entrypoint.sh /entrypoint.sh

ARG UID
ARG GID
ENV UID ${UID}
ENV GID ${GID}
ENV USER dev

RUN groupadd --force -g ${GID} ${USER} && \
    useradd -ms /bin/bash --no-user-group -u ${UID} -g ${GID} ${USER} && \
    mkdir /composer && \
    chown -R ${USER}:${USER} /src && \
    chown -R ${USER}:${USER} /composer && \
    chmod +x /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]

FROM base as prod

FROM base as dev

FROM base as local
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug
USER ${USER}

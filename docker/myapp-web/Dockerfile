FROM php:8.1.1-apache

# Composer のバージョン と ハッシュ値
ARG composer_hash=721cc27f81c6485fff70e6f56b9f2aadae770a1f8974a384c34e35987a230d8c
ARG composer_ver=2.2.3
# Composer の保存先
ARG composer_path=/usr/local/bin/composer

RUN apt-get update \
  # Composer インストール
  && php -r "copy('https://getcomposer.org/download/$composer_ver/composer.phar', '$composer_path');" \
  && chmod 755 $composer_path \
  && php -r "if (hash_file('sha256', '$composer_path') !== '$composer_hash') { \
          echo '!!! Failed to install Composer !!!'; \
          unlink('$composer_path'); \
      } \
      echo PHP_EOL;" \
  # インストールした Composer のバージョン表示（確認用、省略可）
  && composer -v | grep "Composer version" \
  # unzip コマンド (composer create-project で必要)
  && apt-get install -y unzip\
  # vim （省略可）
  && apt-get install -y vim \
  # unzip コマンド (composer create-project で必要)
  && apt-get install -y unzip \
  # PHP の intl 拡張 (CakePHP 4 で必要)
  && apt-get install -y libicu-dev \
  && docker-php-ext-install intl \
  # PDO MySQL 拡張
  && docker-php-ext-install pdo_mysql \
  # mod_rewrite 有効化
  && a2enmod rewrite
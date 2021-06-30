FROM php:apache
EXPOSE 80
RUN apt update
RUN apt install -y apt-utils curl git gnupg software-properties-common unzip zsh
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-key C99B11DEB97541F0
RUN apt-add-repository https://cli.github.com/packages
RUN apt update
RUN apt install -y gh
RUN git clone -b docker --single-branch https://github.com/AtlasRW/dotfiles.git ~/dotfiles
RUN for file in ~/dotfiles/.*; do mv $file ~; done
RUN rm -Rf ~/dotfiles
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN docker-php-ext-install pdo_mysql
RUN git clone https://github.com/AtlasRW/wails.git /var/www/html
RUN a2enmod rewrite
WORKDIR /var/www/html
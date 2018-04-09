# Definindo a versão do PHP
FROM php:7.2-apache

# Instalando o módulo do PHP - MYSQLI
# responsável pela conexão com banco de dados
RUN docker-php-ext-install mysqli

# Habilitando o módulo
# comando opcional uma vez que é implicito
RUN docker-php-ext-enable mysqli

# Diretorio onde possui todas as informações do app
WORKDIR /var/www/html/

# Copiar todo conteudo que está no diretorio 
COPY . /var/www/html/



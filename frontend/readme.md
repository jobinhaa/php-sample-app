# Documentaçāo Frontend

## Primeiros passos

No arquivo Dockerfile você precisará definir a versāo do seu PHP, para isso utilize o *FROM*

    FROM php:7.2-apache

Nesse projeto utilizamos a versāo 7.2 mas você pode consultar as versões mais atuais em https://hub.docker.com/_/php/

É necessário instalar o módulo do PHP - MYSQLI que é responsável pela conexão com banco de dados, para isso utilizamos o 

    RUN docker-php-ext-install mysqli

Para habilitar esse módulo utilizaremos o comando 
 
    RUN docker-php-ext-enable mysqli
  
esse comando é opcional uma vez que é implicito.
 
Definimos o diretório onde todos os arquivos ficarāo utilizando o *WORKDIR*

    WORKDIR src/ /var/www/html/

Ainda no arquivo Dockerfile você precisará copiar todo o conteúdo do diretório, para isso utilizamos o *COPY*

    COPY . /var/www/html/

---

## Criaçāo de containers

Para gerar a imagem do container, no terminal de sua preferência utilize o comando *docker build*.
Nesse comando você deverá passar o nome da imagem, a versāo e o diretório onde está localizado o Dockerfile.

    docker build . -t front-php:0.0.1

Para rodar o container utilizamos o comando *docker run* passando o nome e versão da imagem, a porta do host. 

     docker run -d -p 80:80 front-php:0.0.1 
  
No comando acima utilizamos outras tags como *-d* que serve para rodar o container em background.

Você pode confirmar que a imagem foi baixada executando o comando *docker images*

## Deletando containers

Para deletar a imagem você precisa utilizar o comando *docker kill* onde você passará o nome da imagem que quer apagar.

    docker kill front-php


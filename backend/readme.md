# Documentação Backend

### **Primeiros passos**

Para baixar a imagem do php utilizamos o comando

    docker pull php.7.2-apache

Em seguida utilizamos o comando abaixo para baixar mysql

    docker pull mysql:5.7

No arquivo *Dockerfile* definimos a versão do mysql e indicamos onde ele está localizado usando os seguintes comandos

**FROM mysql:latest**

**COPY ./demo.sql /docker-entrypoint-initdb.d/**

O comando acima ignora sql e utiliza entry point

---

### **Criando build do banco no docker**

Para criar uma build é necessário definir o nome do seu banco e a versão, conforme o comando abaixo

    docker build . -t db:0.0.1

   **db** é o nome do seu arquivo

   **0.0.1** é a versão 

Para rodar a imagem criado executamos o comando

    docker run -d -e MYSQL_DATABASE='demo' -e MYSQL_ALLOW_EMPTY_PASSWORD='yes' --name backend db:0.0.1


 O comando **MYSQL_DATABASE** nós definimos qual arquivo do banco de dados iremos usar, nesse projeto utilizamos o **demo.sql** que está armazenado na pasta backend.

 Já o comando **MYSQL_ALLOW_EMPTY_PASSWORD** permite que nosso banco de dados não tenha senha.


Para ver o que tem dentro do banco de dados executamos o comando

    docker exec -ti backend mysql -u root -p
    
    
Para fazer o frontend se comunicar com o backend utilizamos o comando

    docker build . -t frontend:0.0.1
    
 E em seguida

    docker run -d -p 80:80 --name frontend --link backend frontend:0.0.1
    
Para deletar o container basta utilizar o comando 

        docker kill *nome_da_imagem*



# Sistemas para Internet - SecDevOps

***nac:*** Criação de uma aplicação no formato "CRUD" executada em containers com base na linguagem "PHP" e no banco de dados "MySQL";

**Joana Durvalo**
**RM77739**
***2TINA***

### Primeiros passos
 As instruções de como configurar os builds para subir a aplicação para o *Docker* está localizada nas seguintes pastas:
 - [Frontend](https://github.com/jobinhaa/php-sample-app/blob/master/frontend/readme.md)
 - [Backend](https://github.com/jobinhaa/php-sample-app/blob/master/backend/readme.md)

 A ordem de configuração é: primeiro a pasta frontend depois a pasta do backend, uma vez que a segunda pasta depende de configurações prévias que estão na pasta do front.

---

***Importante:***

Instruções sobre modelo de execução e entregáveis podem ser obtidas no [diretório de documentação](https://github.com/fiapsecdevops/php-sample-app/tree/master/docs) ou no portal do aluno;

Duvidas podem ser enviadas para <profhelder.pereira@fiap.com.br>

Esta app foi adaptada do exemplo contido [neste artigo](https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php)

A estrutura foi criada com base nas seguintes tags:

- frontend-0.1: Versão de testes SEM conexão com o banco para a primeira parte da NAC;
- stable:  Versão COM as linhas de conexão com o banco configuradas, será necessário que o MySQL esteja operante para testes faltando apenas a criação do Dockerfile da aplicação/mysql;

Desafio Agenda
==============

Sistema de agenda desenvolvido com PHP / Laravel 10

Instalação
----------

 1) Clonar ou baixar o repositório
 2) Acessar o projeto pelo terminal 
 3) executar `composer install`
 4) Criar um banco de dados (Ex: agenda)
 5) Renomear o arquivo **.env.example** (localizado na raiz do projeto) para **.env**
 6) Acessar o arquivo .env e inserir as suas configurações do banco de dados 
 

    DB_CONNECTION=mysql
    
    DB_HOST=127.0.0.1
    
    DB_PORT=3307 (Aqui teve que ser essa porta, mas normalmente é 3306)
    
    DB_DATABASE=agenda
    
    DB_USERNAME=root
    
    DB_PASSWORD=

Executar no terminal:

7) `php artisan migrate`
8) `php artisan db:seed`
8) `php artisan key:generate`
9) `php artisan serve`

Login
=============

Já possui contatos cadastrados para poder testar.

 **E-mail:** primeira@gmail.com
 
 **Senha:** mesa1234

API REST JSON "lista contatos"
=============

http://127.0.0.1:8000/contatos

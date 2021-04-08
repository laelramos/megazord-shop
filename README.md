# Clonar o projeto

## Requisitos de servidor
>sudo apt-get install php7.4-mbstring
>
>sudo apt install php-xml
> 
> sudo apt install sqlite3

## Instalar dependências
> composer install
> 
> npm install

## Configurando ambiente
> cp .env.example .env
> 
> php artisan key:generate

## Banco de dados

Configurar o .env com a base
>php artisan migrate
> 
>php artisan db:seed

Usuário admin criado<br>
E-mail: admin@exemplo.com<br>
Senha: password<br>

## Executando servidor php
>php artisan serve

Sistema rodando em http://localhost:8000/

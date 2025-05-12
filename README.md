# Contact API - Laravel

Esta é uma API RESTful desenvolvida com Laravel para gerenciamento de contatos, com suporte a testes automatizados e envio de e-mails.

---

## Tecnologias Utilizadas

-   Laravel 10+
-   PHP 8+
-   sqlite
-   PHPUnit (testes)
-   Mailtrap (envio de e-mails em ambiente de desenvolvimento)

---

## Instalação

composer install

## Configure o .env:

APP_NAME=ContactAPI
APP_URL=http://localhost

DB_CONNECTION=sqlite
DB_DATABASE="caminho/do/projeto/ate/o diretorio/database/database.sqlite"

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=SEU_USUARIO
MAIL_PASSWORD=SUA_SENHA
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contato@seusite.com
MAIL_FROM_NAME="Contact API"
MAIL_TO="email de que vai receber as notificações"

## Gere a chave da aplicação:

php artisan key:generate

## Execute as migrations:

php artisan migrate

## Testes

php artisan test

## Envio de E-mails

https://mailtrap.io/

O envio de e-mail é feito utilizando o Mailtrap para ambiente de desenvolvimento. Ao criar um novo contato, um e-mail de notificação é enviado.

Classe de envio: App\Mail\ReciverContactMail

View: resources/views/email/contato-recebido.blade.php

Exemplo de e-mail

From:Laravel <hello@example.com>
To: <email@hotmail.com>
Contato Recebido
Nome: Teste Pessoa
Email: teste@exemplo522.com

## | Método | Rota | Descrição |

| ------ | ------------- | -------------------- |
| GET | /contact | Lista os contatos |
| POST | /contact | Cria um novo contato |
| PUT | /contact/{id} | Atualiza um contato |
| DELETE | /contact/{id} | Remove um contato |

Projeto realizado para teste fullstack da Empresa Inforgeneses
---

## Intuito da aplicação

Sistema de cadastro onde usuário cadastra clientes, produtos e pedidos.

## Como clonar o projeto?

No seu terminal, clone o projeto com o comando abaixo:

git clone https://github.com/fab1nnTT/Sistema-de-Cadastro.git

---

# Backend

O backend do projeto foi feito em Laravel com banco de dados em MySQL.
Nele, foram utilizados:

-[Laravel](https://laravel.com/docs/10.x/installation) (para a construção do CRUD)


## Como rodar?
será necessário a instalação do Xampp:
[Xampp](https://www.apachefriends.org/pt_br/download.html)

Irá precisar também de um arquivo .env com as seguintes variáveis:

DB_CONNECTION=mysql.

DB_HOST=127.0.0.1.

DB_PORT=3306

DB_DATABASE=sistema_cadastro

DB_USERNAME=root

DB_PASSWORD=

### Para ambiente de desenvolvimento:

-composer install

-php artisan migrate

-php artisan serve


Após os comandos, o projeto estará rodando na porta declarada no arquivo .env (http://localhost/:3306)

---


Teste feito por Fábio Henrique.

qualquer dúvidas, entre em contato por email: fabiohedias@hotmail.com

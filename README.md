![Screenshot](intro.png)

## Museu Haikai

Sejam bem-vindos ao Museu Haikai, realizamos suas publicações de obras textuais.
Venham compartilhar suas reflexões, poesias, frases, pensamentos, críticas com os internautas da plataforma.

## Requisitos

- PHP ou Pacotes (Xampp, Wampp, Mampp, etc)
- MySQL
- NPM
- Composer
- [Laravel Framework](https://laravel.com/docs/7.x/installation#server-requirements)


## Como instalar

Escolha um diretório de seu preferência e rode os seguintes comandos:

```bash
git clone https://github.com/jvbs/museu_haikai.git

cd museu_haikai/
```

Agora iremos instalar as dependências do projeto, utilizando os comandos:

```bash
composer install

npm install
```

Dentro do projeto, crie um arquivo `.env` na raiz do projeto (copie o conteúdo do `.env-example`), cole e, neste arquivo, altere as variáveis de ambiente para configurar seu banco de dados:

```bash
DB_HOST=[host do seu banco]
DB_PORT=[porta do seu banco]
DB_DATABASE=[banco de dados]
DB_USERNAME=[usuario server]
DB_PASSWORD=[senha server]
```
Crie uma chave para a aplicação e gere tabelas:
```bash
php artisan key:generate

php artisan migrate
```

Agora execute o comando para iniciar a ferramenta:
```bash
php artisan serve
```

E em outro terminal:
```bash
npm run watch
```

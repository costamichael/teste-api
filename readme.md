<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<h1>PROJETO - TESTE - CRIAÇÃO DE API</h1>
<h3>Laravel 5.6</h3>
</p>

## Clone o projeto
- bash-> [git clone git@github.com:costamichael/teste-api.git](#) 

## Acesse o projeto
- bash-> [cd teste-api](#)

## Instale as dependências e o framework
- bash-> [composer install --no-scripts](#)

## Copie o arquivo .env.example
- bash-> [cp .env.example .env](#)

## Crie uma nova chave para a aplicação
- bash-> [php artisan key:generate](#)

-----

## EDITE O ARQUIVO [ENV](#) NA RAIZ DO PROJETO

- **PARA USAR MYSQL - CONFIGURE COM OS DADOS DO SEU MYSQL ABAIXO** <br>

DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=banco_de_dados <br>
DB_USERNAME=user <br>
DB_PASSWORD=senha <br>

- **PARA SQLITE** <br>

DB_CONNECTION=sqlite <br>

## CRIAR TABELAS

Para gerar as tabelas, após ter escolhido e configurado o banco de dados.
- digite o comando -> [php artisan migrate](#)

------

## IMPORTAÇÃO DE DADOS COM [[MYSQL]](#)
 **ESSE É O PROCESSO MAIS RÁPIDO DE IMPORTAÇÃO**

Importando Banco de dados usando [ LOAD DATA LOCAL INFILE ]

- digite o comando -> [php artisan importMysql:db](#)
- Fim da importação.

------

## IMPORTAÇÃO DE DADOS COM [[SQLITE]](#)
 **ESSE PROCESSÓ TAMBÉM É RÁPIDO**

Opção 1) Importando Banco de dados [ COM BASH ]

- Abra o bash na raiz do projeto laravel.
- Inicie o SQLite com o comando -> [sqlite3](#)
- Aponte o banco de dados com o comando -> [.open database/database.sqlite](#)
- Indique o Separador dos dados com o comando -> [.separat ,](#)
- Importe o arquivo com o comando -> [.import '| tail -n +2 storage/arquivos/dataset-processo-seletivo-2019.csv' produtos](#)
- Fim da importação.

 **ESSE É O PROCESSO MAIS LENTO DE IMPORTAÇÃO - FOREACH COM INSERT LINHA A LINHA.**
 
 Opção 2) Importando Banco de dados com artisan.
- Digite no console o comando -> [php artisan importSqlite:db](#)
- Aguarde até o fim do processamento, com a mensagem de concluído.
------
## Rodando a API

Para testar a API, acesse o projeto [http://localhost/teste-api/public/api/v1/produtos/{CODIGO_GTIN}](#)

## Michael da Costa

Projeto API.

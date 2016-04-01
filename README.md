Testando Doctrine
===

Pequenos exemplos de como utilizar o módulo Doctrine.

Doctrine database abstraction & access layer (DBAL)
---

### Instalação

    $ cd db
    $ ~/composer.phar install



Doctrine 2 ORM
---

### Instalação

    $ cd orm
    $ ~/composer.phar install


### Manipulando banco de dados pelo Doctrine ORM

O arquivo `cli-config.php` é necessário para o Doctrine reconhecer as linhas de comandos abaixo. Será preciso
 alterar os dados da conexão no arquivo `conexao.php` para o Doctrine ter acesso ao banco de dados.

Todas as classes de modelo devem estar na pasta `src` do projeto para o Doctrine ORM criar as tabelas no
 banco de dados. Execute o comando abaixo para o Doctrine criar todas as tabelas das classes de modelo:

    $ vendor/bin/doctrine orm:schema-tool:create

Para remover todas as tabelas criada utilize o comando `drop`:

    $ vendor/bin/doctrine orm:schema-tool:drop --force

Para visualizar qual query está sendo executada adicione o parâmetro `dump-sql`:

    $ vendor/bin/doctrine orm:schema-tool:create --dump-sql

Ao adicionar ou remover o campos na classe de modelo podemos atualizar as tabelas da base de dados com o
 comando abaixo:

    $ vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
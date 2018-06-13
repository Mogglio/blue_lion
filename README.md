Blue-lion
=========

To start calendar in local :

- Import calendar.sql

- Edit bootstrap.php to add your own sql config

- Install composer

- composer dump-autoload

- Install mbstring for php with : sudo apt-get install php7.1-mbstring

- php -S localhost:8000 -d display_errors=1 -t public


To start sympfony in local :

- composer update

- to generate bdd : php bin/console doctrine:schema:update --force

- to start server : php bin/console server:start

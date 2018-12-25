# Avoca-Profile
A profile page for person

## Install
* install composer
* composer install

## Run
#### Run from public/ folder
* Setup virtual host to public/ folder
* Go to application/config/avoca.php
* Change value to
`$config['public_folder'] = '';`

#### Run from root folder
* Go to application/config/avoca.php
* Change value to
`$config['public_folder'] = 'public';`

## Config
* Go to application/config/config.php
* Change
`$config['base_url'] = 'http://localhost/Avoca-Profile';`

## Developer
* First controller: application/controllers
* View auto load from views/[theme]/templates/[controller]/[action].twig

## Note
* Auto system will run with SQLite3: `application/config/avocaprofile.db`
* If you want to use with MYSQL
* `import mysql from: application/config/avoca_profile.sql`
* `update database info with codeigniter syntax: application/config/database.php`
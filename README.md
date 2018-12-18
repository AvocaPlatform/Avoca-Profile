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

## Developer
* First controller: application/controllers
* View auto load from views/[theme]/templates/[controller]/[action].twig
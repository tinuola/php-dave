### Config Steps

#### Verify PHP

- In terminal, run `php -v`

#### Install Composer locally

- https://getcomposer.org/download/
- Move `composer.phar` to directory on PATH:
  - Run `sudo mv composer.phar /usr/local/bin/composer`
- Run `composer` to verify install (Should see help instructions)

#### Install PHPunit in project directory

- Run `composer require --dev phpunit/phpunit ^7`
- This should create `composer.json` and `composer.lock` files
- Run `./vendor/phpunit/phpunit/phpunit` to verify install

#### Add Alias

- Run `alias phpunit="./vendor/phpunit/phpunit/phpunit"
- Run `phpunit` to verify

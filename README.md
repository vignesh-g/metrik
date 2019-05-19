# Setup 
* Clone repo.
* Make sure that you have the latest PHP version
* Install and update composer

# Commands
Run commands in project root directory.

To install packages use the following commands

```
composer dump-autoload -o
```
```
composer require phpunit/phpunit
```

To test the code use this command

```
php app/PrimeNumberMultiplication.php --count 10
```

To start the test using phpunit use following commands
```
./vendor/bin/phpunit test/PrimeNumberTest.php
```
```
./vendor/bin/phpunit test/MultiplyTest.php
```

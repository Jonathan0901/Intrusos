Intrusos
========
Estadísticas de inicio de sesión de usuarios, detención de usuarios

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist joan/intrusos "*"
```

or add

```
"joan/intrusos": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

Agregar: 

```php
'modules'=>[
   'intrusos' => [
      'class' => 'app\vendor\joan\intrusos\Module',
   ],
],
```
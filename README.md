Intrusion Detection
========
User login statistics, intrusion detection.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require joan/intrusos "dev-master"
```

or add

```
"joan/intrusos": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

1. In your config/web.php: 

```php
'modules'=>[
   'intrusos' => [
      'class' => 'app\vendor\joan\intrusos\Module',
   ],
],
```

2. Run Migration:

```
php yii migrate --migrationPath=vendor/joan/intrusos/migrations/
```
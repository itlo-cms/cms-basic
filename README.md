Basic package ITLO CMS
===================================

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist itlo/cms-basic "*"
```

or add

```
"itlo/cms-basic": "*"
```

Configuration app
----------

```php

    'aliases'     => [
        '@common'   => '@root/common',
        '@frontend' => '@root/frontend',
        '@console'  => '@root/console',
    ],
```


 
 


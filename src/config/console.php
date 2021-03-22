<?php
/**
 * @author Logachev Roman <rlogachev@itlo.ru>
 * @link http://itlo.ru/
 * @copyright ITLO (Infomarket)
 */
return [
    'basePath' => "@root/console",

    'controllerNamespace' => 'console\controllers',

    'bootstrap' => ['log', 'cms'],

    'aliases' => [
        '@webroot' => '@frontend/web',
        '@web'     => '',
    ],
];

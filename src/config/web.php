<?php
/**
 * @author Logachev Roman <rlogachev@itlo.ru>
 * @link http://itlo.ru/
 * @copyright ITLO (Infomarket)
 */
return [

    'basePath' => "@root/frontend",

    'controllerNamespace' => 'frontend\controllers',

    'components' => [
        'view' => [
            'theme' => [
                'class' => \itlo\cms\cmsbasic\DefaultTheme::class,
            ],
        ],
    ],
];
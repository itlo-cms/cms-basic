<?php
/**
 * @author Logachev Roman <rlogachev@itlo.ru>
 * @link http://itlo.ru/
 * @copyright ITLO (Infomarket)
 */

namespace itlo\cms\cmsbasic;

use yii\base\Theme;

/**
 * @author Semenov Alexander <semenov@itlo.com>
 */
class DefaultTheme extends Theme
{
    public $pathMap = [
        '@app/views' => [
            '@app/templates/default',
        ],
    ];
}
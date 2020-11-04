<?php

namespace panix\asset\bootbox;

use yii\web\AssetBundle;

/**
 * Class YiiBootBoxAsset
 */
class YiiBootBoxAsset extends AssetBundle
{
    public $jsOptions = [
        'position' => View::POS_END
    ];
    public $sourcePath = __DIR__ . '/';

    public $js = [
        'js/yii.bootbox.js',
    ];
    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
    ];

}

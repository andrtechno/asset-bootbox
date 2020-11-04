<?php

namespace panix\asset\bootbox;

use yii\web\AssetBundle;

/**
 * Class BootBoxAsset
 */
class BootBoxAsset extends AssetBundle
{
    public $jsOptions = [
        'position' => View::POS_END
    ];
    public $sourcePath = '@npm/dist';

    public $js = [
        'bootbox.min.js',
        'bootbox.locales.min.js',
    ];
    public $depends = [
        'panix\asset\bootbox\YiiBootBoxAsset',
    ];

}

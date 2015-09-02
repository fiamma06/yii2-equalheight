<?php

namespace fiamma06\equalheight\assets;

use yii\web\AssetBundle;

class EqualHeightAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/bower/jquery.equalheights';

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @var array
     */
    public $js = [
        'jquery.equalheights.min.js',
    ];
}

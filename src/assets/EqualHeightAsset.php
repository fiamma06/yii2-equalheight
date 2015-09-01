<?php

namespace fiamma06\equalheight\assets;

use yii\web\AssetBundle;

class EqualHeightAsset extends AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        '@bower\jquery.equalheights\jquery.equalheights.min.js',
    ];
}

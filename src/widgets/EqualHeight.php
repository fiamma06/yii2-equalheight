<?php

namespace fiamma06\equalheight\widgets;

use fiamma06\equalheight\assets\EqualHeightAsset;
use yii\base\Widget;

/**
 * Class EqualHeight
 * @package fiamma06\equalheight\widgets
 */
class EqualHeight extends Widget
{
    /**
     * Run
     */
    public function run() {
        $this->registerAssets();
        $this->registerJS();
    }

    /**
     * Registration Assets
     */
    public function registerAssets() {
        EqualHeightAsset::register($this->getView());
    }

    /**
     * Registration JS methods
     */
    public function registerJS() {
        $this->getView()->registerJS("(function($){
            $('{$this->getId()}').equalHeight();
        })(jQuery)");
    }
}
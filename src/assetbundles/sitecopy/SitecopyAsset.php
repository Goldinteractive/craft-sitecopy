<?php

namespace goldinteractive\sitecopy\assetbundles\sitecopy;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class SitecopyAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@goldinteractive/sitecopy/assetbundles/sitecopy/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [];

        $this->css = [
            'css/sitecopy.css',
        ];

        parent::init();
    }
}

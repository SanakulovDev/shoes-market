<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/animate.min.css',
        'css/bootstrap-grid.min.css',
        'css/bootstrap-reboot.min.css',
        'css/font-awesome.min.css',
        'css/jquery-ui.css',
        'css/icomon.css',
        'css/jquery.fancybox.min.css',
        'css/jquery.mCustomScrollbar.min.css',
        'css/meanmenu.css',
        'css/nice-select.css',
        'css/normalize.css',
        'css/owl.carousel.min.css',
        'css/responsive.css',
        'css/slick.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery-3.0.0.min.js',
        'js/bootstrap.bundle.min.js',
        'js/bootstrap.min.js',
        'js/jquery.mCustomScrollbar.concat.min.js',
        'js/jquery.min.js',
        'js/jquery.validate.js',
        'js/modernizer.js',
        'js/plugin.js',
        'js/popper.min.js',
        'js/slider-setting.js',
        "https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js",
        "js/custom.js",
        'js/main.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}

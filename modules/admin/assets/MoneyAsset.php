<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MoneyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/vendors/bootstrap/dist/css/bootstrap.min.css',
        'web/vendors/font-awesome/css/font-awesome.min.css',
        'web/vendors/nprogress/nprogress.css',
        'web/css/custom.min.css',
    ];
    public $js = [
        //'web/vendors/jquery/dist/jquery.min.js',
        'web/vendors/bootstrap/dist/js/bootstrap.min.js',
        'web/vendors/fastclick/lib/fastclick.js',
        'web/vendors/nprogress/nprogress.js',
        'web/vendors/echarts/dist/echarts.min.js',
        'web/vendors/echarts/map/js/world.js',
        'web/js/custom.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

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
class GoalAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/vendors/bootstrap/dist/css/bootstrap.min.css',
        'web/vendors/font-awesome/css/font-awesome.min.css',
        'web/vendors/nprogress/nprogress.css',
        'web/vendors/iCheck/skins/flat/green.css',
        'web/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'web/vendors/jqvmap/dist/jqvmap.min.css',
        'web/vendors/bootstrap-daterangepicker/daterangepicker.css',
        'web/css/custom.min.css',
    ];
    public $js = [
        'web/vendors/jquery/dist/jquery.min.js',
        'web/vendors/bootstrap/dist/js/bootstrap.min.js',
        'web/vendors/fastclick/lib/fastclick.js',
        'web/vendors/nprogress/nprogress.js',
        'web/vendors/iCheck/icheck.min.js',
        
        'web/vendors/Chart.js/dist/Chart.min.js',
        'web/vendors/gauge.js/dist/gauge.min.js',
        'web/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'web/vendors/skycons/skycons.js',
        'web/vendors/Flot/jquery.flot.js',
        'web/vendors/Flot/jquery.flot.pie.js',
        'web/vendors/Flot/jquery.flot.time.js',
        'web/vendors/Flot/jquery.flot.stack.js',
        'web/vendors/Flot/jquery.flot.resize.js',
        'web/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'web/vendors/flot-spline/js/jquery.flot.spline.min.js',
        'web/vendors/flot.curvedlines/curvedLines.js',
        'web/vendors/DateJS/build/date.js',
        'web/vendors/jqvmap/dist/jquery.vmap.js',
        'web/vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        'web/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'web/vendors/moment/min/moment.min.js',
        'web/vendors/bootstrap-daterangepicker/daterangepicker.js',
        'web/js/custom.min.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

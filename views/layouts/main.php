<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/573ae40c10.js"></script>    
    <link rel="icon" href="/images/fav.png" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <!-- <?php 
    // NavBar::begin([
        // 'brandLabel' => 'My Company',
        // 'brandUrl' => Yii::$app->homeUrl,
        // 'options' => [
            // 'class' => 'navbar-inverse navbar-fixed-top',
        // ],
    // ]);
    // echo Nav::widget([
        // 'options' => ['class' => 'navbar-nav navbar-right'],
        // 'items' => [
            // ['label' => 'Home', 'url' => ['/site/index']],
            // ['label' => 'About', 'url' => ['/site/about']],
            // ['label' => 'Contact', 'url' => ['/site/contact']],
            // Yii::$app->user->isGuest ? (
                // ['label' => 'Login', 'url' => ['/site/login']]
            // ) : (
                // '<li>'
                // . Html::beginForm(['/site/logout'], 'post')
                // . Html::submitButton(
                    // 'Logout (' . Yii::$app->user->identity->username . ')',
                    // ['class' => 'btn btn-link logout']
                // )
                // . Html::endForm()
                // . '</li>'
            // )
        // ],
    // ]);
    // NavBar::end();
    ?> -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="/"><img src="/images/loho.png" width="100" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Меню</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Главное меню</li>

                <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">На главную</a></li>
                <li><i class="fa fa-info" aria-hidden="true"></i><a href="about">О нас</a></li>
                <li><i class="fa fa-folder-open" aria-hidden="true"></i><a href="services">Услуги</a></li>
                <li><i class="fa fa-picture-o" aria-hidden="true"></i><a href="portfolio">Портфолио</a></li>
                <li><i class="fa fa-address-book" aria-hidden="true"></i><a href="contact">Контакты</a></li>



                <li class="box-label">Свяжитесь с нами</li>

                <li class="box-social"><a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
    </div>
        <!-- end nav -->
        <?= $content ?>
<footer class="footer">
    <div class="container-fluid">
        <p class="pull-left">Ювелирная лавка Jewellery.in.ua &copy;<?= date('Y')-3 ?></p>

        <p class="pull-right">Powered by <a href="alex-march.info"> Alex March production </a></p>
    </div>
</footer>
<a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

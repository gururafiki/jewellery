<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\modules\admin\assets\StatisticAsset;

StatisticAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>

  <body class="nav-md">
    <?php $this->beginBody() ?>
    <!-- Preloader -->
    <!-- end Preloader -->
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="tablesoutput.php" class="site_title"><i class="fa fa-balance-scale"></i> <span>Админ панель</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/images/almaz.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Добро пожаловать,</span>
                <h2>Администратор !</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Меню</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Домой <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/dashboard/users">Статистика пользователей</a></li>
                      <li><a href="/admin/dashboard/goals">Статистика целей</a></li>
                      <li><a href="/admin/dashboard/money">Статистика оборота</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Таблицы <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/sell">Продажи</a></li>
                      <li><a href="/admin/buy">Покупки</a></li>
                      <li><a href="/admin/product">Продукты</a></li>
                      <li><a href="/admin/seller">Партнеры</a></li>
                      <li><a href="/admin/user">Клиенты</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Отчеты <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="aboutproducts.php">Отчет по продукции</a></li>
                      <li><a href="aboutusers.php">Отчет по сотрудникам</a></li>
                      <li><a href="abouttransactions.php">Отчет по транзакциям</a></li>
                      <li><a href="aboutpartners.php">Отчет по партнерам</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> Сотрудники<span class="label label-success pull-right">Coming Soon</span><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Куратор</a>
                        <li><a>Куратор<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Подчиненый</a>
                            </li>
                            <li><a href="#level2_1">Подчиненый</a>
                            </li>
                            <li><a href="#level2_2">Подчиненый</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Куратор</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i>Моя визитка <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Купить/Продать продукт" href="producttransaction.php">
                <i class="fa fa-edit" aria-hidden="true"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Дать/взять деньги" href="addtransaction.php">
                <i class="fa fa-money" aria-hidden="true"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Мои транзакции" href="tablesoutput.php">
                <i class="fa fa-table" aria-hidden="true"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Выход" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/images/almaz.png" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Профиль<span class="label label-success pull-right">Coming Soon</span></a></li>
                    <li>
                      <a href="settings.php">
                        <!-- <span class="badge bg-red pull-right">50%</span> -->
                        <span>Настройки</span>
                        <span class="label label-success pull-right">Coming Soon</span>
                      </a>
                    </li>
                    <li><a href="help.php">Help<span class="label label-success pull-right">Coming Soon</span></a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Выход</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?=$uncomfirmedcount?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Заголовок</span>
                          <span class="time">07.08.2012 (15:45:23)</span>
                        </span>
                        <span class="message">
                          Пример текста
                        </span>
                        <span class="label label-success pull-right">Пример</span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Посмотреть все...</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        
        <?= $content ?>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            production by <a href="https://alex-march.info">Alex March </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>

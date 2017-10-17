<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BuySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Покупки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buy-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-edit"></i>  Создать закупку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'product_id',
            'product_name',
            'product_price',
            'count',
            'total_price',
            'date',
            // 'day',
            // 'month',
            // 'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
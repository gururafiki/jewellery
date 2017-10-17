<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Продукты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-edit"></i>  Создать продукт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            // 'metal_1',
            // 'metal_2',
            // 'metal_3',
            // 'metal_4',
            // 'metal_5',
            // 'insert_1',
            // 'insert_2',
            // 'insert_3',
            // 'insert_4',
            // 'insert_5',
            'gender',
            'type',
            // 'producer',
            'price_buy',
            // 'profit',
            'price_sell',
            // 'profit_sum',
            'count_total',
            'count_sold',
            'count_available',
            // 'size',
            'weight_full',
            // 'weight_metals',
            // 'weight_inserts',
            // 'carat_inserts',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

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
            'date',
            // 'day',
            // 'month',
            // 'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
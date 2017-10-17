<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\InsertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inserts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Insert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'weight',
            'carat',
            'count_unical',
            // 'count_total',
            // 'count_sold',
            // 'weight_sold',
            // 'count_available',
            // 'weight_available',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

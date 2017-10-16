<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'metal_1',
            'metal_2',
            'metal_3',
            'metal_4',
            'metal_5',
            'insert_1',
            'insert_2',
            'insert_3',
            'insert_4',
            'insert_5',
            'gender',
            'type',
            'producer',
            'price_buy',
            'profit',
            'price_sell',
            'profit_sum',
            'count',
            'count_sold',
            'size',
            'weight_full',
            'weight_metals',
            'weight_inserts',
            'carat_inserts',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Buy */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Buys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buy-view">

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
            'username',
            'product_id',
            'product_name',
            'product_price',
            'count',
            'total_price',
            'date',
            'day',
            'month',
            'year',
        ],
    ]) ?>

</div>

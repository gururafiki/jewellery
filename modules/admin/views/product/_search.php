<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'metal_1') ?>

    <?= $form->field($model, 'metal_2') ?>

    <?= $form->field($model, 'metal_3') ?>

    <?php // echo $form->field($model, 'metal_4') ?>

    <?php // echo $form->field($model, 'metal_5') ?>

    <?php // echo $form->field($model, 'insert_1') ?>

    <?php // echo $form->field($model, 'insert_2') ?>

    <?php // echo $form->field($model, 'insert_3') ?>

    <?php // echo $form->field($model, 'insert_4') ?>

    <?php // echo $form->field($model, 'insert_5') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'producer') ?>

    <?php // echo $form->field($model, 'price_buy') ?>

    <?php // echo $form->field($model, 'profit') ?>

    <?php // echo $form->field($model, 'price_sell') ?>

    <?php // echo $form->field($model, 'profit_sum') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'count_sold') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'weight_full') ?>

    <?php // echo $form->field($model, 'weight_metals') ?>

    <?php // echo $form->field($model, 'weight_inserts') ?>

    <?php // echo $form->field($model, 'carat_inserts') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

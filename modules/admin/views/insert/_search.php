<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\InsertSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="insert-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'weight') ?>

    <?= $form->field($model, 'carat') ?>

    <?= $form->field($model, 'count_unical') ?>

    <?php // echo $form->field($model, 'count_total') ?>

    <?php // echo $form->field($model, 'count_sold') ?>

    <?php // echo $form->field($model, 'weight_sold') ?>

    <?php // echo $form->field($model, 'count_available') ?>

    <?php // echo $form->field($model, 'weight_available') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

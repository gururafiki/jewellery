<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'group') ?>

    <?= $form->field($model, 'key') ?>

    <?= $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'month') ?>

    <?php // echo $form->field($model, 'year') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

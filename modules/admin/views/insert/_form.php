<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Insert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="insert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'carat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_unical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_sold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_sold')->textInput() ?>

    <?= $form->field($model, 'count_available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_available')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

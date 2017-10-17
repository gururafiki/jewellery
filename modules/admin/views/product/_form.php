<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metal_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metal_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metal_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metal_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metal_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insert_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insert_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insert_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insert_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insert_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList($arrCategories,[
        'prompt' => '',
        'onchange' => '
                $.post("/product/list/'.'"+$(this).val(), function(data){
                    if (data.length>10){
                        $("div.field-product-type").html(data);
                    }
                });',]) ?>

    <?= $form->field($model, 'producer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_buy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_sell')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profit_sum')->textInput() ?>

    <?= $form->field($model, 'count_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_sold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'weight_full')->textInput() ?>

    <?= $form->field($model, 'weight_metals')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_inserts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carat_inserts')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

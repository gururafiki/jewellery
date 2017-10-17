<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Insert */

$this->title = 'Create Insert';
$this->params['breadcrumbs'][] = ['label' => 'Inserts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Buy */

$this->title = 'Create Buy';
$this->params['breadcrumbs'][] = ['label' => 'Buys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

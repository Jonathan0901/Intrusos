<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\vendor\joan\intrusos\models\File */

$this->title = 'Update File: ' . $model->fil_id;
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fil_id, 'url' => ['view', 'id' => $model->fil_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

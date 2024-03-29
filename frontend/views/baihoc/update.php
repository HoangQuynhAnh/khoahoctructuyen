<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Baihoc */

$this->title = 'Update Baihoc: ' . $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Baihocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="baihoc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

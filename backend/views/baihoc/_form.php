<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Baihoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baihoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenbai') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'thoigian') ?>

    <?= $form->field($model, 'video') ?>

    <?= $form->field($model, 'ngaytao') ?>

    <?= $form->field($model, 'ngaycapnhat') ?>

    <?= $form->field($model, 'trangthai') ?>

    <?= $form->field($model, 'noidung') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

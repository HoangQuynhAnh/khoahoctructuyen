<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Khoahoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoahoc-form">

    <?php $form = ActiveForm::begin(); ?>
     <?= $form->field($model, 'baihoc[tieude]') ?>

    <?= $form->field($model, 'trangthai') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'mota') ?>

    <?= $form->field($model, 'gioithieu') ?>

    <?= $form->field($model, 'yeucau') ?>

    <?= $form->field($model, 'thoiluong') ?>

    <?= $form->field($model, 'hocphi') ?>

    <?= $form->field($model, 'khuyenmai') ?>

    <?= $form->field($model, 'magiamgia') ?>

    <?= $form->field($model, 'chude') ?>

    <?= $form->field($model, 'baihoc') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

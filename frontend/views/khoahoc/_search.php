<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchKhoahoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khoahoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'giaovien') ?>

    <?= $form->field($model, 'tien') ?>

    <?= $form->field($model, 'trangthai') ?>

    <?= $form->field($model, 'ten') ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'gioithieu') ?>

    <?php // echo $form->field($model, 'yeucau') ?>

    <?php // echo $form->field($model, 'thoiluong') ?>

    <?php // echo $form->field($model, 'hocphi') ?>

    <?php // echo $form->field($model, 'khuyenmai') ?>

    <?php // echo $form->field($model, 'magiamgia') ?>

    <?php // echo $form->field($model, 'chude') ?>

    <?php // echo $form->field($model, 'luotmua') ?>

    <?php // echo $form->field($model, 'baihoc') ?>

    <?php // echo $form->field($model, 'hocsinh') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'ngaycapnhat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

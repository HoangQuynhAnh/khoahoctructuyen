<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Giaovien */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Giaoviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="main-panel">
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
        </div>
    </nav>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="content">
        <div class="container-fluid">
            <p>
        <?= Html::a('Cập nhật', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xoá', ['delete', 'id' => (string)$model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'username',
            'password_hash',
            'password_reset_token',
            'email',
            'auth_key',
            'role',
            'status',
            'created_at',
            'updated_at',
            'hoten',
            'diachi',
            'noicongtac',
            'monday',
            'hocvi',
            'gioitinh',
            'fb',
            'gioithieu',
            'anh',
            'ngaysinh',
            'khoahoc',
        ],
    ]) ?>


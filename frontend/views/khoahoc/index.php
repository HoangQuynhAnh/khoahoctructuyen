<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchKhoahoc */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khoahocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
        </div>
    </nav>
<div class="giaovien-index">

   <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
                            <p class="card-category" style="float:right; font-size: 16px;padding: 10px"> <?= Html::a('Thêm', ['create'], ['class' => 'btn btn-success them']) ?></p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'giaovien',
            'tien',
            'trangthai',
            'ten',
            //'mota',
            //'gioithieu',
            //'yeucau',
            //'thoiluong',
            //'hocphi',
            //'khuyenmai',
            //'magiamgia',
            //'chude',
            //'luotmua',
            //'baihoc',
            //'hocsinh',
            //'ngaytao',
            //'ngaycapnhat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .table.table-striped.table-bordered{

    }
    table.table.table-hover tbody tr td,.them{
        font-size: 14px;
        font-family: OpenSans-Regular;

    }
</style>

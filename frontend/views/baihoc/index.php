<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchBaihoc */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baihocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baihoc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Baihoc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'tieude',
            'link',
            'theloai',
            'noidung',
            //'ngaytao',
            //'ngaycapnhat',
            //'trangthai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

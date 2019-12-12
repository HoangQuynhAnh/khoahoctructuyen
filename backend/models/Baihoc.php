<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "baihoc".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $tieude
 * @property mixed $link
 * @property mixed $theloai
 * @property mixed $noidung
 * @property mixed $ngaytao
 * @property mixed $ngaycapnhat
 * @property mixed $trangthai
 */
class Baihoc extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['hoctructuyen', 'baihoc'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'tieude',
            'link',
            'theloai',
            'noidung',
            'ngaytao',
            'ngaycapnhat',
            'trangthai',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tieude', 'link', 'theloai', 'noidung', 'ngaytao', 'ngaycapnhat', 'trangthai'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'tieude' => 'Tieude',
            'link' => 'Link',
            'theloai' => 'Theloai',
            'noidung' => 'Noidung',
            'ngaytao' => 'Ngaytao',
            'ngaycapnhat' => 'Ngaycapnhat',
            'trangthai' => 'Trangthai',
        ];
    }
}

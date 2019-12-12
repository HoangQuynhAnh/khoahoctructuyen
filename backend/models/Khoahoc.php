<?php

namespace backend\models;
use yii2tech\embedded\ContainerInterface;
use yii2tech\embedded\ContainerTrait;
use Yii;

/**
 * This is the model class for collection "khoahoc".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $giaovien
 * @property mixed $tien
 * @property mixed $trangthai
 * @property mixed $ten
 * @property mixed $mota
 * @property mixed $gioithieu
 * @property mixed $yeucau
 * @property mixed $thoiluong
 * @property mixed $hocphi
 * @property mixed $khuyenmai
 * @property mixed $magiamgia
 * @property mixed $chude
 * @property mixed $luotmua
 * @property mixed $baihoc
 * @property mixed $hocsinh
 * @property mixed $ngaytao
 * @property mixed $ngaycapnhat
 */
class Khoahoc extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['khoahoctructuyen', 'khoahoc'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'giaovien',
            'tien',
            'trangthai',
            'ten',
            'mota',
            'gioithieu',
            'yeucau',
            'thoiluong',
            'hocphi',
            'khuyenmai',
            'magiamgia',
            'chude',
            'luotmua',
            'baihoc',
            'hocsinh',
            'ngaytao',
            'ngaycapnhat',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['giaovien', 'tien', 'trangthai', 'ten', 'mota', 'gioithieu', 'yeucau', 'thoiluong', 'hocphi', 'khuyenmai', 'magiamgia', 'chude', 'luotmua', 'baihoc', 'hocsinh', 'ngaytao', 'ngaycapnhat'], 'safe'],
             ['baihoc', 'common\validators\EmbedDocValidator', 'scenario' => 'user','model'=>'\backend\models\Baihoc'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'giaovien' => 'Giáo viên',
            'tien' => 'Giá tiền',
            'trangthai' => 'Trạng thái',
            'ten' => 'Tên khoá học',
            'mota' => 'Mô tả',
            'gioithieu' => 'Giới thiệu',
            'yeucau' => 'Yêu cầu',
            'thoiluong' => 'Thời lượng',
            'hocphi' => 'Học phí',
            'khuyenmai' => 'Khuyến mãi',
            'magiamgia' => 'Mã giảm giá',
            'chude' => 'Chủ đề',
            'luotmua' => 'Lượt mua',
            'baihoc' => 'Bài học',
            'hocsinh' => 'Học sinh',
            'ngaytao' => 'Ngày tạo',
            'ngaycapnhat' => 'Ngày cập nhật',
        ];
    }
}

<?php

namespace app\models;

use yii\db\ActiveRecord;

class Service extends ActiveRecord
{
    public static function tableName()
    {
        return 'service';
    }

    public function rules()
    {
        return [
            [['name', 'price', 'duration'], 'required'],
            [['price'], 'number'],
            [['duration'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Nama Service',
            'price' => 'Harga',
            'duration' => 'Durasi (Menit)',
        ];
    }
}
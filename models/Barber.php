<?php

namespace app\models;

use yii\db\ActiveRecord;

class Barber extends ActiveRecord
{
    public static function tableName()
    {
        return 'barber';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],

            [['experience'], 'integer'],

            [['name'], 'string', 'max' => 100],

            [['phone'], 'string', 'max' => 20],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Barber',
            'phone' => 'No. HP',
            'experience' => 'Pengalaman (Tahun)',
        ];
    }
}
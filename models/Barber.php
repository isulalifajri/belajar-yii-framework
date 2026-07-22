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

            [['experience','phone'], 'integer'],

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

    public function getBookings()
    {
        return $this->hasMany(
            Booking::class,
            ['barber_id' => 'id']
        );
    }
}
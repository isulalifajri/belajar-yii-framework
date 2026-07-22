<?php

namespace app\models;

use yii\db\ActiveRecord;

class Booking extends ActiveRecord
{
    public static function tableName()
    {
        return 'booking';
    }

    public function rules()
    {
        return [
            [
                [
                    'customer_name',
                    'barber_id',
                    'service_id',
                    'booking_date',
                    'booking_time',
                    'status',
                ],
                'required'
            ],

            [['barber_id', 'service_id'], 'integer'],

            [['booking_date'], 'date', 'format' => 'php:Y-m-d'],

            [['booking_time'], 'date', 'format' => 'php:H:i'],

            [['customer_name'], 'string', 'max' => 100],

            [['status'], 'string', 'max' => 20],
        ];
    }

    public function attributeLabels()
    {
        return [
            'customer_name' => 'Nama Customer',
            'barber_id' => 'Barber',
            'service_id' => 'Service',
            'booking_date' => 'Tanggal Booking',
            'booking_time' => 'Jam Booking',
            'status' => 'Status',
        ];
    }

    public function getBarber()
    {
        return $this->hasOne(
            Barber::class,
            ['id' => 'barber_id']
        );
    }

    public function getService()
    {
        return $this->hasOne(
            Service::class,
            ['id' => 'service_id']
        );
    }
}
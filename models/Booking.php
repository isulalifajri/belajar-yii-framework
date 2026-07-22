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
                    'booking_time'
                ],
                'required'
            ],
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
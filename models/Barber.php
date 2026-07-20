<?php

namespace app\models;

use yii\db\ActiveRecord;

class Barber extends ActiveRecord
{
    public static function tableName()
    {
        return 'barbers';
    }
}
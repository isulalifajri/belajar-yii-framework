<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin();

echo $form->field($model, 'customer_name');

echo $form->field($model, 'barber_id')
    ->dropDownList(
        $barbers,
        ['prompt' => '-- Pilih Barber --']
    );

echo $form->field($model, 'service_id')
    ->dropDownList(
        $services,
        ['prompt' => '-- Pilih Service --']
    );

echo $form->field($model, 'booking_date')
    ->input('date');

echo $form->field($model, 'booking_time')
    ->input('time');

echo $form->field($model, 'status')
    ->dropDownList([
        'Pending' => 'Pending',
        'Confirmed' => 'Confirmed',
        'Cancelled' => 'Cancelled',
    ]);

echo Html::submitButton(
    'Simpan',
    ['class' => 'btn btn-primary']
);

ActiveForm::end();
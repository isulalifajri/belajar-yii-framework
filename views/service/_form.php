<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin();

echo $form->field($model, 'name');

echo $form->field($model, 'price');

echo $form->field($model, 'duration');

echo Html::submitButton(
    'Simpan',
    ['class' => 'btn btn-primary']
);

ActiveForm::end();
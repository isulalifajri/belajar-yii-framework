<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();

echo $form->field($model, 'name');

echo $form->field($model, 'phone');

echo $form->field($model, 'experience');

echo Html::submitButton(
    'Simpan',
    ['class' => 'btn btn-primary']
);

ActiveForm::end();
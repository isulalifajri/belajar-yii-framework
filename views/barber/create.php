<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Tambah Barber';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'phone') ?>

<?= $form->field($model, 'experience') ?>

<div class="form-group">

    <?= Html::submitButton('Simpan', [
        'class' => 'btn btn-primary'
    ]) ?>

</div>

<?php ActiveForm::end(); ?>
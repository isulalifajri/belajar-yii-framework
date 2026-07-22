<?php

use yii\helpers\Html;

$this->title = 'Tambah Booking';
?>

<h2><?= Html::encode($this->title) ?></h2>

<?= $this->render('_form', [
    'model' => $model,
    'barbers' => $barbers,
    'services' => $services,
]) ?>
<?php

use yii\helpers\Html;

$this->title = 'Detail Booking';
?>

<h2><?= Html::encode($this->title) ?></h2>

<table class="table table-bordered">

    <tr>
        <th>Customer</th>
        <td><?= Html::encode($model->customer_name) ?></td>
    </tr>

    <tr>
        <th>Barber</th>
        <td><?= Html::encode($model->barber->name) ?></td>
    </tr>

    <tr>
        <th>Service</th>
        <td><?= Html::encode($model->service->name) ?></td>
    </tr>

    <tr>
        <th>Harga</th>
        <td><?= Yii::$app->formatter->asCurrency($model->service->price, 'IDR') ?></td>
    </tr>

    <tr>
        <th>Tanggal</th>
        <td><?= Html::encode($model->booking_date) ?></td>
    </tr>

    <tr>
        <th>Jam</th>
        <td><?= Html::encode($model->booking_time) ?></td>
    </tr>

    <tr>
        <th>Status</th>
        <td><?= Html::encode($model->status) ?></td>
    </tr>

</table>

<p>
    <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-secondary']) ?>
</p>
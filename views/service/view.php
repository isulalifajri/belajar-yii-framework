<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = $model->name;
?>

<h1><?= Html::encode($model->name) ?></h1>

<table class="table table-bordered">

    <tr>
        <td>Nama Service</td>
        <td><?= Html::encode($model->name) ?></td>
    </tr>

    <tr>
        <td>Harga</td>
        <td>
            Rp <?= number_format($model->price, 0, ',', '.') ?>
        </td>
    </tr>

    <tr>
        <td>Durasi</td>
        <td>
            <?= Html::encode($model->duration) ?> Menit
        </td>
    </tr>

    <tr>
        <td>Jumlah Booking</td>
        <td>
            <?= $model->getBookings()->count() ?>
        </td>
    </tr>

</table>

<h3 class="mt-4">Booking</h3>

<?= GridView::widget([
    'dataProvider' => $dataProvider,

    'columns' => [

        [
            'class' => 'yii\grid\SerialColumn',
        ],

        'customer_name',

        [
            'label' => 'Barber',

            'value' => function ($model) {
                return $model->barber
                    ? $model->barber->name
                    : '-';
            },
        ],

        'booking_date',

        'booking_time',

        'status',
    ],
]) ?>
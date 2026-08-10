<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = $model->name;
?>

<h1><?= Html::encode($model->name) ?></h1>

<table class="table table-bordered">

    <tr>
        <td>Nama</td>
        <td><?= Html::encode($model->name) ?></td>
    </tr>

    <tr>
        <td>Phone</td>
        <td><?= Html::encode($model->phone) ?></td>
    </tr>

    <tr>
        <td>Pengalaman</td>
        <td>
            <?= Html::encode($model->experience) ?> Tahun
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
            'label' => 'Service',

            'value' => function ($model) {
                return $model->service
                    ? $model->service->name
                    : '-';
            },
        ],

        'booking_date',

        'booking_time',

        'status',

    ],
]) ?>
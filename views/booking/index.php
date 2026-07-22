<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Booking';
?>

<h2><?= Html::encode($this->title) ?></h2>

<p>
    <?= Html::a(
        'Tambah Booking',
        ['create'],
        ['class' => 'btn btn-success']
    ) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,

    'columns' => [

        ['class' => 'yii\grid\SerialColumn'],

        'customer_name',

        'barber_id',

        'service_id',

        'booking_date',

        'booking_time',

        'status',

        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ],
]); ?>
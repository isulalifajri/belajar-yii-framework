<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

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

<?php Pjax::begin([
    'id' => 'booking-grid',
]); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,

    // 'filterOnFocusOut' => false,

    'columns' => [

        ['class' => 'yii\grid\SerialColumn'],

        'customer_name',

        [
            'attribute' => 'barber_id',
            'label' => 'Barber',

            'filter' => $barbers,

            'filterInputOptions' => [
                'class' => 'form-control',
                'prompt' => '-- Semua Barber --',
            ],

            'value' => function ($model) {
                return $model->barber
                    ? $model->barber->name
                    : '-';
            },
        ],

        [
            'attribute' => 'service_id',
            'label' => 'Service',

            'filter' => $services,

            'filterInputOptions' => [
                'class' => 'form-control',
                'prompt' => '-- Semua Service --',
            ],

            'value' => function ($model) {
                return $model->service
                    ? $model->service->name
                    : '-';
            },
        ],

        [
            'label' => 'Harga',
            'value' => function ($model) {
                return $model->service
                    ? Yii::$app->formatter->asCurrency(
                        $model->service->price,
                        'IDR'
                    )
                    : '-';
            },
        ],

        [
            'attribute' => 'booking_date',

            'filterInputOptions' => [
                'class' => 'form-control',
                'type' => 'date',
            ],
        ],

        [
            'attribute' => 'booking_time',

            'filterInputOptions' => [
                'class' => 'form-control',
                'type' => 'time',
            ],
        ],

        [
            'attribute' => 'status',

            'filter' => [
                'Pending' => 'Pending',
                'Confirmed' => 'Confirmed',
                'Completed' => 'Completed',
                'Cancelled' => 'Cancelled',
            ],

            'filterInputOptions' => [
                'class' => 'form-control',
                'prompt' => '-- Semua Status --',
            ],

            'format' => 'raw',

            'value' => function ($model) {

                return '<span class="badge bg-' .
                    $model->statusBadgeClass .
                    '">' .
                    Html::encode($model->status) .
                    '</span>';
            },
        ],

        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ],
]); ?>

<?php Pjax::end(); ?>
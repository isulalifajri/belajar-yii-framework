<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Detail Booking';

$this->params['breadcrumbs'][] = [
    'label' => 'Booking',
    'url' => ['index']
];

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(
            'Kembali',
            ['index'],
            ['class' => 'btn btn-secondary']
        ) ?>

        <?= Html::a(
            'Edit',
            ['update', 'id' => $model->id],
            ['class' => 'btn btn-primary']
        ) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,

        'attributes' => [

            'id',

            'customer_name',

            [
                'label' => 'Barber',
                'value' => $model->barber
                    ? $model->barber->name
                    : '-',
            ],

            [
                'label' => 'Service',
                'value' => $model->service
                    ? $model->service->name
                    : '-',
            ],

            [
                'label' => 'Harga',
                'value' => $model->service
                    ? Yii::$app->formatter->asCurrency(
                        $model->service->price,
                        'IDR'
                    )
                    : '-',
            ],

            'booking_date',

            'booking_time',

            [
                'attribute' => 'status',
                'format' => 'raw',

                'value' => function ($model) {

                    return '<span class="badge bg-' .
                        $model->statusBadgeClass .
                        '">' .
                        Html::encode($model->status) .
                        '</span>';
                },
            ],

        ],
    ]) ?>

</div>
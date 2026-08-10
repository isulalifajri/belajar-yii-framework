<?php

use yii\helpers\Html;

$this->title = 'Dashboard';

?>

<div class="mb-4">

    <h1>Dashboard</h1>

    <p class="text-muted">
        Selamat datang di Barbershop.
    </p>

</div>


<div class="row g-4">

    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Total Barber
                </h6>

                <h2>
                    <?= $totalBarber ?>
                </h2>

                <?= Html::a(
                    'Lihat Barber',
                    ['/barber/index'],
                    ['class' => 'btn btn-sm btn-primary']
                ) ?>

            </div>

        </div>

    </div>


    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Total Service
                </h6>

                <h2>
                    <?= $totalService ?>
                </h2>

                <?= Html::a(
                    'Lihat Service',
                    ['/service/index'],
                    ['class' => 'btn btn-sm btn-primary']
                ) ?>

            </div>

        </div>

    </div>


    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Total Booking
                </h6>

                <h2>
                    <?= $totalBooking ?>
                </h2>

                <?= Html::a(
                    'Lihat Booking',
                    ['/booking/index'],
                    ['class' => 'btn btn-sm btn-primary']
                ) ?>

            </div>

        </div>

    </div>


    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6 class="text-muted">
                    Pending Booking
                </h6>

                <h2>
                    <?= $pendingBooking ?>
                </h2>

                <?= Html::a(
                    'Lihat Booking',
                    [
                        '/booking/index',
                        'BookingSearch[status]' => 'Pending'
                    ],
                    ['class' => 'btn btn-sm btn-warning']
                ) ?>

            </div>

        </div>

    </div>

</div>
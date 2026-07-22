<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>

<body>

<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            Barbershop
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/service">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/barber">Barber</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/booking">Booking</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<div class="container mt-4">

    <?= $content ?>

</div>

<footer class="text-center mt-5 mb-3">
    <hr>
    Copyright &copy; <?= date('Y') ?> Barbershop
</footer>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
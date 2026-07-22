<?php

use yii\helpers\Html;

$this->title = 'Data Barber';
?>
<?php if (Yii::$app->session->hasFlash('success')) : ?>

    <div class="alert alert-success">

        <?= Yii::$app->session->getFlash('success') ?>

    </div>

<?php endif; ?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Tambah Barber', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<p>Halaman daftar barber akan kita buat sebentar lagi.</p>
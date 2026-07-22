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

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Pengalaman</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach ($barbers as $i => $barber): ?>

        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= Html::encode($barber->name) ?></td>
            <td><?= Html::encode($barber->phone) ?></td>
            <td><?= Html::encode($barber->experience) ?> Tahun</td>
        </tr>

    <?php endforeach; ?>

    </tbody>
</table>
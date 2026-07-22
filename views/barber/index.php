<?php

use yii\helpers\Html;
use yii\grid\GridView;

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

<?= GridView::widget([
    'dataProvider'=>$dataProvider,

    'columns'=>[

        ['class'=>'yii\grid\SerialColumn'],

        'name',

        'phone',

        'experience',

        ['class'=>'yii\grid\ActionColumn'],

    ]

]) ?>
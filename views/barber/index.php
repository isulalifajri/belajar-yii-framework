<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Data Barber';
?>

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
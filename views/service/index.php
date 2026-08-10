<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Data Service';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Tambah Service', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider'=>$dataProvider,

    'columns'=>[

        ['class'=>'yii\grid\SerialColumn'],

        'name',

        'price',

        'duration',

        ['class'=>'yii\grid\ActionColumn'],

    ]

]) ?>
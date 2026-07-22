<?php

use yii\helpers\Html;

$this->title = $model->name;
?>

<h1><?= Html::encode($model->name) ?></h1>

<table class="table table-bordered">

<tr>

<td>Nama</td>

<td><?= Html::encode($model->name) ?></td>

</tr>

<tr>

<td>Price</td>

<td><?= Html::encode($model->price) ?></td>

</tr>

<tr>

<td>Duration</td>

<td><?= Html::encode($model->duration) ?> Jam</td>

</tr>

</table>
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

<td>Phone</td>

<td><?= Html::encode($model->phone) ?></td>

</tr>

<tr>

<td>Pengalaman</td>

<td><?= Html::encode($model->experience) ?> Tahun</td>

</tr>

</table>
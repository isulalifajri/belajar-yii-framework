<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';

?>

<div class="row justify-content-center">

    <div class="col-md-5">

        <div class="card shadow-sm">

            <div class="card-body">

                <h3 class="mb-4">
                    Login
                </h3>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field(
                    $model,
                    'username'
                ) ?>

                <?= $form->field(
                    $model,
                    'password'
                )->passwordInput() ?>

                <?= $form->field(
                    $model,
                    'rememberMe'
                )->checkbox() ?>

                <?= Html::submitButton(
                    'Login',
                    [
                        'class' => 'btn btn-primary w-100',
                    ]
                ) ?>

                <?php ActiveForm::end(); ?>

            </div>

        </div>

    </div>

</div>
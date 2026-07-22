<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Barber;

class BarberController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

     public function actionTest()
    {
        $model = new Barber();

        $model->name = '';
        $model->phone = '08123456789';
        $model->experience = 'abc';

        if (!$model->validate()) {

            echo "<pre>";
            print_r($model->errors);
            die;
        }

        return "Valid";
    }
}
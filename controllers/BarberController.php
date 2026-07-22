<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Barber;

class BarberController extends Controller
{
    public function actionIndex()
    {
        $barbers = Barber::find()->all();

        return $this->render('index', [
            'barbers' => $barbers,
        ]);
    }

    public function actionCreate()
    {
        $model = new Barber();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash('success', 'Data barber berhasil ditambahkan.');

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}
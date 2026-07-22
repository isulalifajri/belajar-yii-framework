<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Service;
use yii\data\ActiveDataProvider;

class ServiceController extends Controller
{
     public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Service::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionCreate()
    {
        $model = new Service();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash('success', 'Data service berhasil ditambahkan.');

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

        public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash(
                'success',
                'Data berhasil diubah.'
            );

            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash(
            'success',
            'Data berhasil dihapus.'
        );

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        $model = Service::findOne($id);

        if ($model !== null) {
            return $model;
        }

        throw new \yii\web\NotFoundHttpException('Data tidak ditemukan.');
    }
}
<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use app\models\Booking;
use app\models\BookingSearch;
use yii\helpers\ArrayHelper;
use app\models\Barber;
use app\models\Service;
use yii\filters\AccessControl;

class BookingController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['manageBooking'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new BookingSearch();

        $dataProvider = $searchModel->search(
            Yii::$app->request->queryParams
        );

        $barbers = ArrayHelper::map(
            Barber::find()
                ->orderBy(['name' => SORT_ASC])
                ->all(),
            'id',
            'name'
        );

        $services = ArrayHelper::map(
            Service::find()
                ->orderBy(['name' => SORT_ASC])
                ->all(),
            'id',
            'name'
        );

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'barbers' => $barbers,
            'services' => $services,
        ]);
    }

    public function actionCreate()
    {
        $model = new Booking();

        $model->status = 'Pending';

        $barbers = ArrayHelper::map(
            Barber::find()
                ->select(['id', 'name'])
                ->orderBy('name')
                ->asArray()
                ->all(),
            'id',
            'name'
        );

        $services = ArrayHelper::map(
            Service::find()
                ->select(['id', 'name'])
                ->orderBy('name')
                ->asArray()
                ->all(),
            'id',
            'name'
        );

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash(
                'success',
                'Booking berhasil ditambahkan.'
            );

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'barbers' => $barbers,
            'services' => $services,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $barbers = ArrayHelper::map(
            Barber::find()
                ->select(['id', 'name'])
                ->orderBy('name')
                ->asArray()
                ->all(),
            'id',
            'name'
        );

        $services = ArrayHelper::map(
            Service::find()
                ->select(['id', 'name'])
                ->orderBy('name')
                ->asArray()
                ->all(),
            'id',
            'name'
        );

        $model->booking_time = date(
            'H:i',
            strtotime($model->booking_time)
        );

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash(
                'success',
                'Booking berhasil diubah.'
            );

            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
            'barbers' => $barbers,
            'services' => $services,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash(
            'success',
            'Booking berhasil dihapus.'
        );

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        $model = Booking::findOne($id);

        if ($model !== null) {
            return $model;
        }

        throw new \yii\web\NotFoundHttpException(
            'Data tidak ditemukan.'
        );
    }
}
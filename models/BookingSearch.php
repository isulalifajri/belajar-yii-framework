<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class BookingSearch extends Booking
{
    public function rules()
    {
        return [
            [['id', 'barber_id', 'service_id'], 'integer'],

            [
                [
                    'customer_name',
                    'booking_date',
                    'booking_time',
                    'status'
                ],
                'safe'
            ],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Booking::find()
            ->with(['barber', 'service']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

            'pagination' => [
                'pageSize' => 10,
            ],

            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'barber_id' => $this->barber_id,
            'service_id' => $this->service_id,
        ]);

        $query->andFilterWhere([
            'like',
            'customer_name',
            $this->customer_name
        ]);

        $query->andFilterWhere([
            'booking_date' => $this->booking_date,
        ]);

        $query->andFilterWhere([
            'booking_time' => $this->booking_time,
        ]);

        $query->andFilterWhere([
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
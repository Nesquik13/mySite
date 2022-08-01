<?php
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;

/**
 * @var ActiveDataProvider $dataProvider
 * @var User $searchModel
 */

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'name',
        'surname',
//        'password',
        [
            'attribute' => 'phone',
            'format' => 'raw',
            'value' => function($model){
                return Html::tag('span', $model->phone, ['class' => 'badge badge-primary']);
            },
            'options' => [
                'width' => '15%'
            ]
        ],
        'email']
    ]);
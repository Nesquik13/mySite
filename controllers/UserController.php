<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        $this->view->title = 'Создать';
        $model = new User();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate()
    {
        $this->view->title = 'Редактировать';
        $model = new User();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $user = User::findOne($id);
        $user->delete();
        return $this->redirect('index');
    }

}
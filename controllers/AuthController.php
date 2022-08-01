<?php

namespace app\controllers;

use app\models\AuthForm;
use Yii;
use yii\web\Controller;

class AuthController extends Controller
{
    public function actionEntrance()
    {
        if (!Yii::$app->user->isGuest)
            return $this->goHome();

        $form = new AuthForm();
        if ($form->load(Yii::$app->request->post()) && $form->login()) {
            return $this->goBack();
        }

        return $this->render('entrance', ['model' => $form]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
<?php

namespace app\controllers;
use yii\web\Controller;


class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Главная';
        return $this->render('index');
    }
}

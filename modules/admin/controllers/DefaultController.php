<?php

namespace app\modules\admin\controllers;

use app\models\User;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUser()
    {
        $dataProvider = new User();
        return $this->render('user' , ['dataProvider' => $dataProvider]);
    }
}

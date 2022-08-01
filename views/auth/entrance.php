<?php
use app\models\User;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
/**
 * @var User $model
 */

$form = ActiveForm::begin([]);
echo $form->field($model, 'email');
echo $form->field($model, 'password');
echo Html::submitButton('Войти', ['class' => 'btn btn-success']);
ActiveForm::end();
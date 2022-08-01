<?php

use app\models\User;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

/**
 * @var User $model
 */

$form = ActiveForm::begin([]);
echo $form->field($model, 'name');
echo $form->field($model, 'surname');
echo $form->field($model, 'password');
echo $form->field($model, 'phone')->widget(MaskedInput::class, ['mask' => '+7999 999 99 99']);
echo $form->field($model, 'email');
echo Html::submitButton('Добавить', ['class' => 'btn btn-danger']);
ActiveForm::end();
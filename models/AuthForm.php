<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AuthForm extends Model
{
    public $email;
    public $password;

    private $_user;

    public function rules()
    {
        return [
            [['password', 'email'], 'required', 'message' => 'Заполните поле'],
            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Пароль',
            'email' => 'Email',
        ];
    }

    public function login()
    {
        if ($this->validate() && $user = $this->getUser()) {
            if ($user->validatePassword($this->password)) {
                return Yii::$app->user->login($user);
            }
            return false;
        }
        return false;
    }

    public function getUser()
    {
        if (is_null($this->_user)) {
            $this->_user = User::findByUsername($this->email);
        }

        return $this->_user;
    }
}

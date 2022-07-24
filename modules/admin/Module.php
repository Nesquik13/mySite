<?php

namespace app\modules\admin;

use yii\db\ActiveRecord;

/**
 * admin module definition class
 */
class Module extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}

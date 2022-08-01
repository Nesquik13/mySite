<?php

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;

AppAsset::register($this);
/** @var string $content */
/** @var yii\web\View $this */
?>

<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color: cornsilk">Домашняя</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: cornsilk">Ежедневник</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: cornsilk">Цели</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: cornsilk">Финансы</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav">
                <?php if (Yii::$app->user->isGuest) { ?>
                <li class="nav-item" style="margin-right: 15px">
                    <a href="/user/create" class="btn btn-light">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a href="/auth/entrance" class="btn btn-success">Вход</a>
                </li>
                <?php } else { ?>
                    <li class="nav-item" style="margin-right: 20px">
                        <h6 class="m-2" style="color: white " >Приветствую, <?= Yii::$app->user->identity->name ?></h6>
                    </li>
                    <li class="nav-item" >
                        <a href="/auth/logout" class="btn btn-info">Выйти</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
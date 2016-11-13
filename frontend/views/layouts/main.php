<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo.png"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div id="kontakts">
    <?php
    $this->beginBody();

    echo $this->render('siteparts/_header');

    Modal::begin([
        'header' => '<h2></h2>',
        'id' => 'modal-appointment'
    ]);

    echo '<div id="modal-content"></div>';

    Modal::end();
    ?>


    <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
    <?= Alert::widget() ?>
    <div class="inside">
        <div class="servis-inside">
            <div class="wrapper">
                <div class="call-me-back fl-r">
                    <a href="#">Перезвоните мне</a>
                    <div class="form-hide">
                        <form method="post" class="appointment">
                            <input type="text" name="uname" placeholder="Имя">
                            <input type="text" name="tel" placeholder="Телефон" required title="Формат: (096)999 99 99">
                            <input type="submit" value="Свяжитесь со мной">
                        </form>
                    </div>
                </div>
                <br><br>
                <div class="item-servis">
                    <div class="singl-block clearfix">
                    </div>
                </div>
            </div>
            <?= $content ?>
        </div>
    </div>


    <?= $this->render('siteparts/_footer') ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

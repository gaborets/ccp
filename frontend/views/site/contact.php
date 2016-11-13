<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/** @var \dosamigos\google\maps\Map $map */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты клиники';
?>

<div class="kontakt">
    <div class="wrapper">
        <h1>Контакты</h1>
        <div class="items clearfix">
            <div class="left-b fl-l bg-box">
                <div class="cb">
                    <div class="item">
                        <div class="title adress">Адрес:</div>
                        <p>вул. Рейтaрська, 15 </p>
                    </div>
                    <div class="item">
                        <div class="title graf">график работы:</div>
                        <p>Понедельник – Пятница 10.00 – 19.00<br> Суббота 10.00 — 14.00</p>
                    </div>
                    <div class="item">
                        <div class="title email">Email:</div>
                        <p>info@ccp.co.ua</p>
                    </div>
                </div>
                <div class="cb">
                    <div class="item">
                        <div class="title telephon">Телефоны:</div>
                        <p>(068) 868 11 07</p>
                        <p>(094) 828 11 07</p>
                        <p>(044) 228 11 07</p>
                    </div>
                </div>
            </div>
            <div class="right-b fl-r bg-box">
                <div class="title">Запишитесь на прием</div>
                <form method="post" class="appointment">
                    <input type="text" name="uname" placeholder="Имя">
                    <input type="text" name="tel" placeholder="Телефон" required title="Формат: (096) 999 99 99">
                    <input type="submit" value="Отправить заявку">
                </form>
            </div>
        </div>
    </div>
</div>

<?= $map->display(); ?>

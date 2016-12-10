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

<!-- contact section -->
<section class="contact">
    <header class="contact__title">
        <h1>КОНТАКТЫ</h1>
    </header>
    <div class="container">
        <div class="contact__container">
            <div class="left-block">
                <div class="left-block__address">
                    <p>АДРЕС:</p>
                    <span>ул. Рейтaрская, 15</span>
                </div>
                <div class="left-block__schedule">
                    <p>ГРАФИК РАБОТЫ:</p>
                    <span>Понедельник – Пятница 10.00 – 19.00<br>Суббота 10.00 — 14.00</span>
                </div>
                <div class="left-block__email">
                    <p>EMAIL:</p>
                    <span>
                        <a href="mailto:info@ccp.co.ua">info@ccp.co.ua</a>
                    </span>
                </div>
                <div class="left-block__tel">
                    <p>ТЕЛЕФОНЫ:</p>
                    <span>(068) 868 1 107</span>
                    <span>(068) 868 1 107</span>
                    <span>(068) 868 1 107</span>
                </div>
            </div>

            <div class="right-block">
                <form method="post" class="appointment-form">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name">Имя</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Имя" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="message">Сообщение</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="form-submit" class="btn">Отправить сообщение</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- ./contact container -->
    </div><!-- ./container -->
</section>
<!-- ./ contact section -->

<!-- contact-img section -->
<section class="contact-img"></section>
<!-- ./ contact-img section -->
<?= $map->display(); ?>

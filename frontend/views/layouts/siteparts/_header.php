<?php
/**
 * Created by PhpStorm.
 * User: Taras Gaborets
 * Date: 13.11.16
 * Time: 14:11
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

$menuItems = [
    ['label' => 'Головна', 'url' => ['site/index']],
    ['label' => 'Цены', 'url' => ['site/prices']],
    ['label' => 'Контакты', 'url' => ['site/contact']],
];

function getActiveClass($url) {
    return Url::to($url) == Url::current() ? 'active' : '';
}

?>
<!-- header -->
<header class="header">
    <div class="container">
        <div class="header__contacts">
            <div class="header__contacts-adres">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> г. Киев, ул. Рейтарская, 15, 5 этаж</p>
            </div>
            <div class="header__contacts-schedule">
                <p><i class="fa fa-calendar" aria-hidden="true"></i> График работы <i class="fa fa-caret-down" aria-hidden="true"></i></p>
                <div class="schedule-hiden">
                    <ul>
                        <li>Пн-Пт</li>
                        <li>с 10-00 до 19-00</li>
                        <li>Сб</li>
                        <li>с 10-00 до 14-00</li>
                    </ul>
                </div>
            </div>
            <div class="header__contacts-tel">
                <p><i class="fa fa-phone" aria-hidden="true"></i> (068) 868 1 107 <i class="fa fa-caret-down" aria-hidden="true"></i></p>
                <div class="tel-hiden">
                    <p>(094) 828 1 107</p>
                </div>
                <p><i class="fa fa-phone" aria-hidden="true"></i> (044) 228 1 107</p>
            </div>
        </div><!-- ./header contacts -->
    </div><!-- ./container -->
</header>
<!-- ./header -->

<!-- home section -->
<section class="home">
    <div class="container">
        <div class="home__container">
            <div class="home__container__title">
                <div class="home__container__title-logo">
                    <a href="<?= Url::to(['site/index']) ?>"><img src="/img/logo.png" alt=""></a>
                </div>
                <div class="home__container__title-descr">
                    <p class="ru">Center Cervical Pathology</p>
                    <p class="eng">Центр патологии шейки матки</p>
                </div>
            </div><!-- ./home title -->
            <div class="home__container__nav">
                <a role="button" id="nav">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <ul class="navigations">
                    <a role="button" id="close-menu">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <li><a href="<?= Url::to(['site/index']) ?>" class="<?= getActiveClass(['site/index']) ?>">Главная</a></li>
                    <li><a href="<?= Url::to(['site/prices']) ?>" class="<?= getActiveClass(['site/prices']) ?>">Цены</a></li>
                    <li><a href="<?= Url::to(['site/contact']) ?>" class="<?= getActiveClass(['site/contact']) ?>">Контакты</a></li>
                </ul>
            </div><!-- ./home nav -->
        </div><!-- ./home container -->
    </div><!-- ./container -->
</section>
<!-- ./home section -->

<!-- start section -->
<section class="start">
    <div class="container">
        <div class="start__container">
            <div class="start__container__title">
                <h1>Диагностика и лечение гинекологических заболеваний</h1>
            </div>
            <div class="start__container__btn" onclick="modalCallBack('show')">
                <a role="button">Перезвоните мне</a>
            </div>
        </div><!-- ./start container -->
    </div><!-- ./container -->
</section>
<!-- ./start section -->

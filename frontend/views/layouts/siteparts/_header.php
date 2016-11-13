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



?>
<div class="header">
    <div class="top-head clearfix">
        <div class="wrapper">
            <div class="adress fl-l">г. Киев, вул. Рейтaрська, 15, офис 1, 5 етаж</div>
            <div class="schedule fl-l">
                <a href="#"><span>График работы</span></a>
                <div class="work-time">
                    <div class="day">Пн-Пт</div>
                    <p>с 10-00 до 19-00</p>
                    <div class="day">Сб</div>
                    <p>с 10-00 до 14-00</p>
                </div>
            </div>
            <div class="telephone fl-l w-phone1">
                <a href="#">
                    <span class="dropdown-icon">(068) 868 11 07</span>
                </a>
                <div class="phone-hide">
                    <p>(096) 306 71 31</p>
                </div>
            </div>
            <div class="telephone fl-l w-phone2">
                <a href="#"><span>(044) 228 11 07</span></a>
            </div>

        </div>
    </div>
    <?php

    $menuItems = [
        ['label' => 'Головна', 'url' => ['site/index']],
        ['label' => 'Цены', 'url' => ['site/prices']],
        ['label' => 'Контакты', 'url' => ['site/contact']],
    ];

    ?>
    <div class="main-menu">
        <div class="wrapper clearfix">
            <div class="logo fl-l">
                <a href="/">
                    <img src="/logo.png" alt="">
                    <div class="inline">
                        <div class="name-clinic">Центр патології шийки матки</div>
                        <div class="tra-clinic">Center Cervical Pathology</div>
                    </div>
                </a>
            </div>
            <div class="menu fl-l">
                    <?= Nav::widget([
    'options' => ['class' => 'clearfix', 'id' => 'menu'],
    'items' => $menuItems,
]); ?>
            </div><p id="emailSuccess"> <strong style="color:green;"></strong> </p>
        </div>
    </div>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: Taras Gaborets
 * Date: 29.10.16
 * Time: 18:25
 */
use yii\helpers\Url;
?>
<footer class="footer">
    <div class="container">
        <div class="footer__container">
            <div class="footer__container__title">
                <div class="footer__container__title-logo">
                    <img src="/img/logo.png" alt="">
                </div>
                <div class="footer__container__title-descr">
                    <p class="ru">Center Cervical Pathology</p>
                    <p class="eng">Центр патологии шейки матки</p>
                </div>
            </div>
            <div class="footer__container-link">
                <ul>
                    <li><a href="<?= Url::to(['site/inflammatory'])?>">Лечение воспалительных процессов</a></li>
                    <li><a href="<?= Url::to(['site/dysplasia'])?>">Дисплазия шейки матки</a></li>
                    <li><a href="<?= Url::to(['site/prices'])?>">Цены</a></li>
                </ul>
            </div>
            <div class="footer__container-mode">
                <ul>
                    <li>Пн-Пт</li>
                    <li>с 10-00 до 19-00</li>
                    <li>Сб</li>
                    <li>с 10-00 до 14-00</li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> г. Киев, ул. Рейтарская, 15, 5 этаж</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> (068) 868 1 107, (094) 828 1 107 или (044) 228 1 107</p>
        </div>
    </div>
</footer>

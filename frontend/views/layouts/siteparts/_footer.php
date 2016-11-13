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
        <div class="wrapper clearfix">
            <div class="footer-logo fl-l">
                <a href="/">
                    <img src="/logo.png" alt="">
                    <div class="inline">
                        <div class="name-clinic">Центр патології шийки матки</div>
                        <div class="tra-clinic">Center Cervical Pathology</div>
                    </div>
                </a>
            </div>
            <div class="menu-footer fl-l">
                <ul>
                    <li><a href="<?= Url::to(['site/polips'])?>">Лечение полипов</a></li>
                    <li><a href="<?= Url::to(['site/prices'])?>">Цены</a></li>
                    <li><a href="<?= Url::to(['site/infection'])?>">Лечение половых инфекций</a></li>
                    <li><a href="<?= Url::to(['site/infertility'])?>">Лечение Бесплодия</a></li>
                </ul>
            </div>
            <div class="work-time fl-r">
                <div class="day">
                    Пн-Пт
                </div>
                <p>с 10-00 до 19-00</p>
                <div class="day">
                    Сб
                </div>
                <p>с 10-00 до 14-00</p>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="wrapper clearfix">
                <div class="adress fl-l">г. Киев, вул. Рейтaрська, 15, офис 1, 5 етаж</div>
                <div class="telephone fl-l">068) 868 11 07, (094) 828 11 07 або (044) 228 11 07
                </div>
            </div>
        </div>
    </div>
</footer>
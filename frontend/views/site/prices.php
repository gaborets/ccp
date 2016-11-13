<?php
/**
 * Created by PhpStorm.
 * User: Taras Gaborets
 * Date: 13.11.16
 * Time: 16:09
 */
/** @var \yii\web\View $this */


$this->title = 'Цены';
?>

<div class="price">
    <div class="wrapper">
        <h1>Цены</h1>
        <div style="margin: 33px 0 0 0;">
            <strong>Прайс-лист на услуги клиники CCP</strong><br>
            <em>ВНИМАНИЕ: данный прайс носит ознакомительный характер. Цены на услуги могут меняться. Актуальные цены необходимо уточнять позвонив на колл–центр или у администраторов клиники</em></div>
        <ul class="question" id="accordion" role="tablist" aria-multiselectable="true">
            <li>
                <div class="title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        КОНСУЛЬТАЦИИ ВРАЧЕЙ
                    </a>
                </div>
                <div class="answer collapse in" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                    <div class="item clearfix">
                        <div>Консультация врача-гинеколога<br>
                            (сбор анамнеза, осмотр, предварительный<br>
                            Диагноз, рекомендации)</div>
                        <div>250 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Повторная консультация консультация врача<br>
                            (окончательный диагноз, рекомендации<br>
                            По лечению)</div>
                        <div>200  гривен</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        медицинские услуги
                    </a>
                </div>
                <div class="answer collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="item clearfix">
                        <div>Медикаментозное прерывание беременности<br>
                            (консультация,  прием таблеток в 2 этапа<br>
                            УЗИ-мониторинг)</div>
                        <div>2500 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Видеокольпоскопия расширенная</div>
                        <div>200 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Введение  ВМК</div>
                        <div>350 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Извлечение ВМК за «усы»</div>
                        <div>250 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Криодеструкция шейки матки</div>
                        <div>900  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения ЗППП</div>
                        <div>300 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения хронических<br>
                            Воспалительных заболеваний</div>
                        <div>300  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения нарушений<br>
                            Менструального цикла</div>
                        <div>300  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения эндометриоза</div>
                        <div>300  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения миомы матки</div>
                        <div>300  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения кист яичников</div>
                        <div>300 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы лечения гормональных<br>
                            Нарушений    (аменорея, гиперпролактинемия,<br>
                            Гиперандрогения, СПКЯ )</div>
                        <div>400  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Назначение схемы стимуляции овуляции</div>
                        <div>400 – 1200 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Биопсия шейки матки конхотомом или<br>
                            Радиоволновой петлей  с патгистологическим исследованием  без стоимости анестезии</div>
                        <div>550  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Химическая коагуляция шейки матки<br>
                            ( без стоимости препарата)</div>
                        <div>250  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Радиоволновая коагуляция шейки матки<br>
                            1-2  зоны ( без стоимости анестезии)</div>
                        <div>1000  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Радиоволновая коагуляция шейки матки<br>
                            1-3 зоны  ( без стоимости анестезии)</div>
                        <div>1200  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Анестезия местная апликационная </div>
                        <div>100 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Вакцинация от вируса папилломы человека<br>
                            ( со стоимостью вакцины Церварикс)</div>
                        <div>900  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Вакцинация от вируса папилломы человека<br>
                            ( без стоимости вакцины )</div>
                        <div>250 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Патогистологическое исследование<br>
                            Материала</div>
                        <div>350 гривен</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">лабораторные методы обследования</a>
                </div>
                <div class="answer collapse" id="collapseThree" role="tabpanel" aria-labelledby="collapseThree">
                    <div class="item clearfix">
                        <div>ДНК- диагностика инфекций, передающихся<br>
                            Половым путем ( одна инфекция)</div>
                        <div>120  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>ДНК-диагностика вируса папилломы<br>
                            Человека ВПЧ – скриннинг</div>
                        <div>150 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>ДНК-диагностика вируса папилломы<br>
                            Человека ВПЧ-генотипирование</div>
                        <div>300 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Фемофлор – 16 микроорганизмов<br>
                            (исследование биоценоза вагинальной  флоры)</div>
                        <div>520 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Анализ выдений ( женский мазок)</div>
                        <div>100 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Цитологическое обследование<br>
                            На атипические клетки</div>
                        <div>120 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Бакпосев урогенитальных выделений<br>
                            И определение чувствительности к антибиотикам</div>
                        <div>200 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Бакпосев урогенитальных выделений<br>
                            На трихомонаду</div>
                        <div>200 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Исследование аспирата из полости матки<br>
                            ( Pipel – биопсия)</div>
                        <div>450 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Обследование на  RW</div>
                        <div>100 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Развернутый анализ крови<br>
                            ( СОЭ, формула крови )</div>
                        <div>100 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Группа крови, резус-фактор</div>
                        <div>70 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Общий анализ мочи</div>
                        <div>50  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Исследование гормонов крови<br>
                            ( каждый показатель)</div>
                        <div>от  120 гривен</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">лечебные процедуры и манипуляции</a>
                </div>
                <div class="answer collapse" id="collapseFour" role="tabpanel" aria-labelledby="collapseFour">
                    <div class="item clearfix">
                        <div>Иъекция внутримышечная, подкожная<br>
                            ( без стоимости лекарства)</div>
                        <div>30  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Иъекция внутривенная ( без стоимости<br>
                            Лекарства)</div>
                        <div>50 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Ванночка влагалищная, введение тампонов,<br>
                            Орошение ( без гинекологического  набора)</div>
                        <div>100  гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Инстилляция уретры ( со стоимостью катетера)</div>
                        <div>150 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Провокационная проба (без стоимости лекарства)</div>
                        <div>50 гривен</div>
                    </div>
                    <div class="item clearfix">
                        <div>Проба на чувствительность к антибиотикам<br>
                            ( без стоимости лекарства)</div>
                        <div>50 гривен</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

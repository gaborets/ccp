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
use yii\bootstrap\ActiveForm;

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
<?php
$this->beginBody();

echo $this->render('siteparts/_header');

Modal::begin([
    'header' => '<h2></h2>',
    'id' => 'modal-appointment'
]);
echo '<div id="modal-content"></div>';
Modal::end();

Modal::begin([
    'header' => '<h4>Оставте свой номер телефона, и наш врач свяжется с вами</h4>',
    'id' => 'call-back'
]);
?>
<form method="post" class="appointment-form is-modal">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="nameModal">Имя</label>
            <input type="text" name="name" class="form-control" id="nameModal" placeholder="Имя" required>
        </div>
        <div class="form-group col-sm-6">
            <label for="telModal">Тел.</label>
            <input type="tel" name="tel" class="form-control" id="telModal" placeholder="Телефон" required>
        </div>
    </div>

    <div class="row">
        <div class="text-center">
            <button type="submit" id="form-submit" class="btn">Отправить сообщение</button>
        </div>
    </div>
</form>

<?php
Modal::end();

?>


<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
<?= Alert::widget() ?>

<?= $content ?>


<?= $this->render('siteparts/_footer') ?>
<?php $this->endBody() ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter41022209 = new Ya.Metrika({
                    id: 41022209,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/41022209" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
<?php $this->endPage() ?>

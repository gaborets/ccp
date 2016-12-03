<?php
namespace frontend\controllers;

use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;


use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $coord = new LatLng(['lat' => 50.45145707, 'lng' => 30.5119727]);
        $map = new Map([
            'center' => $coord,
            'zoom' => 18,
            'width' => '100%'
        ]);

        $marker = new Marker([
            'position' => $coord,
            'title' => 'My Home Town',
        ]);


        $marker->attachInfoWindow(
            new InfoWindow([
                'content' => $this->renderPartial('_attach-info-window')
            ])
        );

        $map->addOverlay($marker);


        $map->setName('gmap');
        $marker->setName('gmarker');

        $map->appendScript("google.maps.event.addListenerOnce(gmap, 'idle', function(){
            google.maps.event.trigger(gmarker, 'click');
        });");

        return $this->render('contact', ['map' => $map]);
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionPrices()
    {
        return $this->render('prices');
    }

    public function actionAppointment()
    {
        Yii::$app->getResponse()->format = Response::FORMAT_JSON;
        $name = Yii::$app->getRequest()->getBodyParam('name', '');
        $tel = Yii::$app->getRequest()->getBodyParam('tel', '');
        $email = Yii::$app->getRequest()->getBodyParam('email', '');
        $message = Yii::$app->getRequest()->getBodyParam('message', '');

        if(!$tel && !$email) {
            return Yii::$app->getResponse()->setStatusCode(412, 'Телефон или емейл должен быть заполненый');
        }

        Yii::$app->mailer->compose()
            ->setFrom('info@ccp.co.ua')
            ->setTo('gaborets_yuriy@mail.ru')
            ->setSubject('Запись на прийом #appointment')
            ->setHtmlBody(sprintf('<p><b>Имя: %s</b><br><b>Телефон: %s</b><br><b>Пошта: %s</b><br><b>Сообщение: %s</b>', $name, $tel, $email, $message))
            ->send();

        return '';
    }


    public function actionInfection()
    {
        return $this->render('infection');
    }

    public function actionPolips()
    {
        return $this->render('polips');
    }

    public function actionInfertility()
    {
        return $this->render('infertility');
    }

    public function actionDysplasia()
    {
        return $this->render('dysplasia');
    }

    public function actionInflammatory()
    {
        return $this->render('inflammatory');
    }
}

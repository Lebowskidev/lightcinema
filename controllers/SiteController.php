<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Datainformation;
use app\models\EntryForm;
use app\models\Dp;
use app\models\Userdate;
use app\models\User;

class SiteController extends Controller
{

    public function actionChoice(){
               return $this->render('choice');
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actionIndex()
    {
        $query = Datainformation::find();

        $dats = $query->orderBy('pi')
            ->all();

        return $this->render('pi',[
            'dats' => $dats
            ,]);

    }

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && Yii::$app->user->login($model->lr())) {
            return $this->redirect('http://gl/index.php?r=site%2Fabout');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->render('logout',['model'=>'model']);
    }

    public function actionContact()
    {
        $model = new ContactForm();
        $db = new User();
        if ($model->load(Yii::$app->request->post())) {
            $db->username = $model->name;
            $db->password = $model->password;
            $db->id = '';
            $db->save();
            return $this->goHome();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout(){
        return $this->render('about');
    }
}

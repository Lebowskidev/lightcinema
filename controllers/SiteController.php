<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Kgr;
use app\models\EntryForm;
use app\models\Dp;
use app\models\Userinformation;

class SiteController extends Controller
{
    public function actionEntry()
    {
        $model = new EntryForm();
        $db = new Userinformation();


        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $db->name = $model->name;
            $db->email = $model->email;
            $db->password =Yii::$app->getSecurity()->generatePasswordHash($model->password);
            $db->id = '';
            $db->save();
            return $this->redirect('http://host:81/index.php');
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }
    public function actionDp(){
       $model = new Dp();
        $db = new Userinformation();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           $db = Userinformation::find()
                ->where(['name' => $model->name] and ['password' => $model->password])
                ->one();
            if($db->name == $model->name) {
                return $this->redirect('http://host:81/index.php?r=site%2Fabout');
            } else {
                return $this->redirect('http://host:81/index.php?r=site%2Fentry');
            }
        }else{
            return   $this->render('dp', ['model' => new Dp]);
        }
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
        $query = Kgr::find();

        $dats = $query->orderBy('pi')
            ->all();

        return $this->render('pi',[
            'dats' => $dats
            ,]);
    }

    public function actionLogin()
    {
       /* if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);*/
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        /*$model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);*/
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}

<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Datainformation;
use app\models\EntryForm;
use app\models\Dp;
use app\models\Userdate;

class SiteController extends Controller
{
    public function actionEntry()
    {
        $model = new EntryForm();
        $db = new Userdate();


        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $db->name = $model->name;
            $db->email = $model->email;
            $db->password =$model->password;
            $db->id = '';
            $db->date_up = date("Y-m-d H:i:s");
            $db->date_now = date("Y-m-d H:i:s");
            $db->save();
            return $this->redirect('http://light:81/');
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }
    public function actionChoice(){
               return $this->render('choice');
    }
    public function actionDp(){
        //this code work
       $model = new Dp();
        $db = new Userdate();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->name == 'bot'  && $model->password == 'bot'){
               //     $db->date_now = date("Y-m-d H:i:s");
               return $this->redirect('http://light:81/site/choice');
                // return $this->redirect('http://light:81/datainformation');
                //return $this->redirect('http://light:81/index.php?r=datainformation');
            }
           $db = Userdate::find()
                ->where(['name' => $model->name] and ['password' => $model->password])
                ->one();
            if($db->name == $model->name) {
               // return $this->redirect('http://light:81/index.php?r=site%2Fabout  ');
                $db->date_up = date("Y-m-d H:i:s");
                return $this->redirect('http://light:81/site/about');
            } else {
               // return $this->redirect('http://light:81/index.php?r=site%2Fentry');
                return $this->redirect('http://light:81/site/entry');
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
        $query = Datainformation::find();

        $dats = $query->orderBy('pi')
            ->all();

        return $this->render('pi',[
            'dats' => $dats
            ,]);

    }

    public function actionLogin()
    {

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

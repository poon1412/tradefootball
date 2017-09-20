<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Team;
/**
 * Site controller
 */
class AuthController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        ];
    }
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
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
        ];
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionLogin()
    {
      $request = Yii::$app->request;
      $baseUrl = \Yii::getAlias('@web');
      $session = Yii::$app->session;
      $this->layout = "@backend/themes/new/login";
      if($session->has('user'))
      {
        return $this->redirect($baseUrl."/");
      }else {
        return $this->render('login');
      }
    }
    public function actionLoginaction()
    {
      //config
      $request = Yii::$app->request;
      $baseUrl = \Yii::getAlias('@web');
      $username = $request->post('username',null);
      $pass = $request->post('password',null);
      $team = Team::findOne(['username'=>$username]);
      if(isset($customer) && ( $team == $team->password ))
      {
          $session->set('user', $team);
          // $session->setFlash('success', " ยินดีต้อนรับเข้าสู่ระบบ");
          return $this->redirect($baseUrl."/");
        }
        else {
          // $session->setFlash('danger', " ชื่อใช้หรือรหัสผ่านไม่ถูก กรุณาเข้าสู่ระบบใหม่อีกครั้ง");
          return $this->redirect($baseUrl."/auth/login");
        }
    }
    public function actionLogout()
    {
      $session = Yii::$app->session;
      $baseUrl = \Yii::getAlias('@web');
      $session->remove('user');
      return $this->redirect($baseUrl."/");
    }

    }

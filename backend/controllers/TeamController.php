<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

class HomeController extends Controller
{
public function behaviors()
    {
        return [
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
      $this->layout = "@backend/themes/new/index";
      return $this->render('index');
    }
    public function actionEditteam()
    {
      $this->layout = "@backend/themes/new/site";
      return $this->render('');
    }
    public function actionEditplayer()
    {
      $this->layout = "@backend/themes/new/site";
      return $this->render('');
    }


}
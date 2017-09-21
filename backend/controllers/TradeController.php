<?php
namespace backend\controllers;
use yii\data\Pagination;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\NotFoundHttpException;
use backend\models\Player;
use backend\models\Team;
class TradeController extends Controller
{
      public function behaviors()
          {
              return [
              ];
          }

      public function actionIndex()
      {
        $session = Yii::$app->session;
        $baseUrl = \Yii::getAlias('@web');
        if(!($session->has('user')))
        {
          return $this->redirect($baseUrl.'/auth/login');
        }
        $request = Yii::$app->request;
        $search = $request->get('search',null);

        $query = Player::find();
        if($search != null){
          $query->where(["name" => $search]);
        }
        $result = $query->all();
        $pagination = new Pagination([
                    'defaultPageSize' => 7,
                    'totalCount' => $query->count(),
                ]);

                $result = $query->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();

        $this->layout = "@backend/themes/new/site";
        return $this->render('index', [
          'input' => $search,
          'result' => $result,
          'pagination' => $pagination,
        ]);

      }
      public function actionTransfer()
      {
        $request = Yii::$app->request;
        $session = Yii::$app->session;
        $baseUrl = \Yii::getAlias('@web');
        if(!($session->has('user')))
        {
          return $this->redirect($baseUrl.'/auth/login');
        }
        $id=(int)$request->get('id',null);
        $model = Player::findOne($id);
        $this->layout = "@backend/themes/new/index";
        return $this->render('transfer');
      }
      public function actionMessage()
      {
        $session = Yii::$app->session;
        $baseUrl = \Yii::getAlias('@web');
        if(!($session->has('user')))
        {
          return $this->redirect($baseUrl.'/auth/login');
        }
        $this->layout = "@backend/themes/new/index";
        return $this->render('message');
      }
}

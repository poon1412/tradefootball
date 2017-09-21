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
use backend\models\Log;
use backend\models\Transfer;
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
        $this->layout = "@backend/themes/new/site";
        return $this->render('transfer', [
          'result' => $model,
        ]);

      }
      public function actionMessage()
      {
        $session = Yii::$app->session;
        $baseUrl = \Yii::getAlias('@web');
        if(!($session->has('user')))
        {
          return $this->redirect($baseUrl.'/auth/login');
        }
        $query = Log::find();
        $result = $query->all();
        $pagination = new Pagination([
                    'defaultPageSize' => 4,
                    'totalCount' => $query->count(),
                ]);

                $result = $query->orderBy('_id')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        $this->layout = "@backend/themes/new/site";
          return $this->render('message', [
            'result' => $result,
            'pagination' => $pagination,
          ]);
      }
      public function actionBuy()
      {
        $request = Yii::$app->request;
        $session = Yii::$app->session;
        $user = $session->get('user');
        $_idsend =(int)$user['_id'];
        $baseUrl = \Yii::getAlias('@web');
        $_idplayer = (int)$request->get('id',null);
        $_idget = (int)$request->get('idteam',null);
        $price = $request->get('price',null);
        $status ='Waiting';
        $count = Log::find()->count();

        while (Log::findone($count)) {
          $count++;
        }
        $model = new Log();
        $model->_id = $count;
        $model->_idplayer = $_idplayer;
        $model->_idsend = $_idsend;
        $model->_idget = $_idget;
        $model->price = $price;
        $model->status = $status;
        if($model->save()){
          echo "success";
        }else{
          echo "unsuccess";
        }
        return $this->redirect($baseUrl."/team");
      }
      public function actionAccept($id)
      {
        $baseUrl = \Yii::getAlias('@web');
        $id=(int)$id;
        $log=Log::findone($id);
        $_idplayer=$log->_idplayer;
        $_idold=$log->_idget;
        $_idnew=$log->_idsend;
        $price=$log->price;
        $count = Transfer::find()->count();
        while (Transfer::findone($count)) {
          $count++;
        }
        $T = new Transfer;
        $T->_id=$count;
        $T->_idplayer=$_idplayer;
        $T->_idold=$_idold;
        $T->_idnew=$_idnew;
        $T->price=$price;
        $T->save();

        $status='Accept';
        $log->status=$status;
        $log->save();

        $p=Player::findone($_idplayer);
        $n=Team::findone($_idnew);
        $p->_idteam = $_idnew;
        $p->team = $n->name;
        $p->save();
        return $this->redirect($baseUrl."/home/site");
      }
      public function actionRefuse($id)
      {
        $baseUrl = \Yii::getAlias('@web');
        $id=(int)$id;
        $status='Refuse';
        $log=Log::findone($id);
        $log->status = $status;
        $log->save();
        return $this->redirect($baseUrl."/trade/message");
      }
      public function actionCheck()
      {
        $session = Yii::$app->session;
        $baseUrl = \Yii::getAlias('@web');
        if(!($session->has('user')))
        {
          return $this->redirect($baseUrl.'/auth/login');
        }
        $query = Log::find();
        $result = $query->all();
        $pagination = new Pagination([
                    'defaultPageSize' => 4,
                    'totalCount' => $query->count(),
                ]);

                $result = $query->orderBy('_id')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
        $this->layout = "@backend/themes/new/site";
          return $this->render('check', [
            'result' => $result,
            'pagination' => $pagination,
          ]);
      }
}

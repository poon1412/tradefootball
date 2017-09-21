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
class TeamController extends Controller
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
      return $this->render('team');
    }

    public function actionEditplayer()
    {
      $request = Yii::$app->request;
      $id = $request->get('id',null);
      $p=(int)$id;
      $model = Player::findOne($p);
      $this->layout = "@backend/themes/new/site";
      return $this->render('editplayer', [
        'model' => $model
      ]);

    }
    public function actionPlayer()
    {
      $session = Yii::$app->session;
      $user = $session->get('user');
      $id = (int)$user['_id'];
      $request = Yii::$app->request;
      $search = $request->get('search',null);


      $query = Player::find();
      $result = $query->where(["_idteam" => $id]);
      if($search != null){
        $query->where(["name" => $search,"_idteam" => $id]);
      }

      $pagination = new Pagination([
                  'defaultPageSize' => 5,
                  'totalCount' => $query->count(),
              ]);

              $result = $query->orderBy('_id')
                  ->offset($pagination->offset)
                  ->limit($pagination->limit)
                  ->all();

      $this->layout = "@backend/themes/new/site";
        return $this->render('player', [
          'input' => $search,
          'result' => $result,
          'pagination' => $pagination,
        ]);
    }

    public function actionSaveplayer(){
      $session = Yii::$app->session;
      $user = $session->get('user');
      $teamid = (int)$user['_id'];

      $request = Yii::$app->request;
      $id = (int)$request->get('id',null);
      $name = $request->get('name',null);
      $lname = $request->get('lname',null);
      $age = $request->get('age',null);
      $weight = $request->get('weight',null);
      $height = $request->get('height',null);
      $D_M_Y = $request->get('D_M_Y',null);
      $position = $request->get('position',null);
      $number = $request->get('number',null);
      $country = $request->get('country',null);
      $baseUrl = \Yii::getAlias('@web');

      if($id == null){
        //create
        $count = Player::find()->count();
        $model = new Player();
        while (Player::findone($count)) {
          $count+=1;
        }
        $model->_id = ($count);
        $model->_idteam = $teamid;
        $model->team = $user['name'];
      }else{
        //update
        $model = Player::findOne($id);
      }

      $model->name = $name;
      $model->lname = $lname;
      $model->age = $age;
      $model->weight = $weight;
      $model->height = $height;
      $model->D_M_Y = $D_M_Y;
      $model->position = $position;
      $model->number = $number;
      $model->country = $country;
      if($model->save()){
        echo "success";
      }else{
        echo "unsuccess";
      }
      return $this->redirect($baseUrl."/team/player");
    }

    public function actionDelete()
    {
        $baseUrl = \Yii::getAlias('@web');
        $request = Yii::$app->request;
        $id = (int)$request->get('id',null);
        $model = Player::findOne($id)->delete();

        return $this->redirect($baseUrl."/team/player");
    }



}

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
      $id=6;
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



}

<?php
namespace backend\controllers;
use yii\data\Pagination;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Player;
use backend\models\Team;

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
    public function actionSite()
    {
      $query = Team::find();
      $result = $query->all();
      $this->layout = "@backend/themes/new/site";
        return $this->render('site', [
          'result' => $result,
        ]);
    }
    public function actionTeam()
    {
      $this->layout = "@backend/themes/new/site";
      return $this->render('team');
    }
    public function actionPlayer()
    {
      $request = Yii::$app->request;
    	$search = $request->get('search',null);


    	$query = Player::find();
    	if($search != null){
    		$query->where(["name" => $search]);
    	}
    	$result = $query->all();
      $pagination = new Pagination([
                  'defaultPageSize' => 10,
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

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
use backend\models\Transfer;

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
    public function actionTeam()
    {
      $query = Team::find();
      $result = $query->all();
      $this->layout = "@backend/themes/new/site";
        return $this->render('team', [
          'result' => $result,
        ]);

    }
    public function actionSite()
    {
      $query = Transfer::find();
      $result = $query->all();

//       foreach ($result as $obj){
//       	$player = Player::findOne($obj->_idplayer);
//       	$name = $player['name'];

//       	//เขียนแบบนี้ส่งไปที่หน้าจอ หรือ

//       	echo $name;
//       	echo $obj->_idold;
//       	echo $obj->_idnew;
//       	exit();
//       }

      // ขอปิดอันนี้แปบ
//       foreach ($result as $var) {
//         $R[$player] = Player::findone($var['_idplayer']);
//         $R[$old] = Team::findone($var['_idold']);
//         $R[$new] = Team::findone($var['_idnew']);
//       }
      $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        $result = $query->orderBy('_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


      $this->layout = "@backend/themes/new/site";
      return $this->render('site', [
        'result' => $result,
        'pagination' => $pagination,
      ]);

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
                  'defaultPageSize' => 8,
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

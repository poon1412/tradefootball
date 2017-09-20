$this->title = 'login';
$session = Yii::$app->session;
$user = $session->get('user');
echo $user['name'];
 asdasd

<?php

/* @var $this yii\web\View */

$this->title = 'index';
$session = Yii::$app->session;
$user = $session->get('user');
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerCssFile ( "@web/assets/semantic/team.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>

<!-- btn logout -->
  <div class="ui grid right aligned">
    <div class=" sixteen wide column" id="logout">
      <form  action="<?=$baseUrl."/auth/logout"?>" method="post">


      <button class="circular ui large icon button">
        <i class="sign out icon "></i>
      </button>
      </form>
    </div>
  </div>


<!-- img logo team manager -->
<img  id="img-logo" src="<?=$baseUrl.$user['img']?>" alt="" width="350px">
<a href="<?=$baseUrl."/trade/index"?>"><button  id="btn1" class="ui inverted blue button huge">Trade</button></a>
<a href="<?=$baseUrl."/team/player"?>"><button  id="btn2" class="ui inverted blue button huge">Edit Player</button></a>
<a href="<?=$baseUrl."/team/editteam"?>"><button  id="btn3" class="ui inverted blue button huge">Edit Team</button></a>
<a href="<?=$baseUrl."/trade/message"?>"><button  id="btn4" class="ui inverted blue button huge">Message</button></a>

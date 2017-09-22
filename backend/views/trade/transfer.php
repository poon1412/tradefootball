<?php

/* @var $this yii\web\View */
$session = Yii::$app->session;
$user = $session->get('user');
use backend\models\Team;
$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>


<style type="text/css">
 .topcorner{
   position:absolute;
   top:10;
   right:0;
  }
</style>
<!-- main nav --><br>
<div class="ui container">
<div class="ui grid">
  <div class="column">
    <div class="ui one column grid">
      <div class="one column">
        <a href="<?=$baseUrl."/team"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
        <div class="three column">
          <br><br><br> &nbsp;&nbsp;&nbsp;
          <a href="<?=$baseUrl."/team/player"?>"><button  class="ui blue button small"><i class="icon user"></i>Player</button></a>
        <a href="<?=$baseUrl."/team/editteam"?>"><button  class="ui blue button small"><i class="icon Soccer"></i>Team</button></a>
        <a href="<?=$baseUrl."/trade"?>"><button  class="ui blue button small"><i class="icon Exchange"></i>Trade</button></a>
        <a href="<?=$baseUrl."/trade/message"?>"><button  class="ui blue button small"><i class="icon mail"></i>Message</button></a>
        <a href="<?=$baseUrl."/trade/check"?>"><button  class="ui blue button small"><i class="icon Write Square"></i>Check</button></a>
        <div  class="ui horizontal list topcorner">
          <div class="item">
            <img class="ui mini circular image" src="<?=$baseUrl.$user['img']?>">
              <div class="content">
                <div class="ui sub header">TEAM</div>
                <?= $user['name'] ?>
              </div>
            </div>
        </div>
        <a href="<?=$baseUrl."/auth/logout"?>"><button  class="ui blue button small" style="float: right;"><i class="icon lock in"></i>Logout</button></a>
    </div>
  </div>
</div>
</div>
</div>
<br>
<!-- end main nav -->

<div class="ui container">
  <div class="ui grid">
  <div class="one wide column"></div>
  <div class="four wide column">
    <img src="<?=$baseUrl."/assets/logo/trade.png"?>" wide="100" height="100" alt="">
  </div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column">
    <div class="ui card">
  <div class="image">

    <img src="<?= $baseUrl.$result->img ?>">
  </div>
  <div class="content">
    <a class="header"><?= $result->name.' '.$result->lname ?></a>
    <div class="meta">
      <span class="position"><?= $result->position ?></span>
    </div>
    <div class="description">
      <img class="ui mini circular image" src="<?= $baseUrl.Team::getTeam($result->_idteam)['img'] ?>">
    </div>
  </div>
  <div class="extra content">
  </div>
</div>
  </div>
<form class="" action="<?=$baseUrl."/trade/buy"?>" method="get">
  <input type="hidden" name="id" value="<?=$result->_id?>">
  <input type="hidden" name="idteam" value="<?=$result->_idteam?>">
  <div class="seven wide column">
    <br>
    <br>
    <div class="ui tiny form">
  <div class="one fields">
    <div class="field">
      <label><h2>$Price</h2></label>
      <input placeholder="price" type="number" name="price">
    </div>
  </div>
  <button class="ui youtube button blue" name="submit">
  <i class="dollar icon"></i>
  Submit
</button>
  </div>
  <div class="four wide column">
    <br>
    <br>
    <br>
  </div>

</div>
</form>
</div>
</div>

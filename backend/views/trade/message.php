<?php
use backend\models\Player;
use backend\models\Team;
/* @var $this yii\web\View */
$session = Yii::$app->session;
$user = $session->get('user');
$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>

<div class="ui container">
  <div class="ui grid">
    <div class="four wide column"></div>
    <div class="four wide column"></div>
    <div class="four wide column"></div>
    <div class="four wide column ">
      <div class="ui horizontal list " style="float: right;">
        <div class="item" >
          <img class="ui mini circular image" src="/images/avatar2/small/molly.png">
            <div class="content">
              <div class="ui sub header">Molly</div>
                Coordinator
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- main nav -->
<div class="ui container">
<div class="ui grid">
  <div class="column">
    <div class="ui one column grid">
      <div class="one column">
        <a href="<?=$baseUrl."/team"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
        <div class="three column">
          <br><br><br> &nbsp;&nbsp;&nbsp;
          <button  class="ui blue button small"><i class="icon user"></i>Player</button>
          <button  class="ui blue button small"><i class="icon Soccer"></i>Team</button>
          <button  class="ui blue button small"><i class="icon Exchange"></i>Trade</button>
          <button  class="ui blue button small"><i class="icon mail"></i>Message</button>
          <button  class="ui blue button small" style="float: right;"><i class="icon lock in"></i>Logout</button>
        </div>
    </div>
  </div>
</div>
</div>
<br>
<!-- end main nav -->

</div>
</br></br>
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="one wide column">
      <img src="https://cdn1.iconfinder.com/data/icons/social-media-14/96/Evernote-128.png" alt="" width="100" height="70">
    </div>

    <div class="two wide column">
    </br>
      <h1 class="ui header">Message</h1>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>



<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>
<?php foreach ($result as $var):
  $p=Player::getPlayer($var['_idplayer']);
  $t=Team::getTeam($var['_idsend']);
   ?>
<?php if ($var['_idget']==$user['_id'] && $var['status']=='Waiting'): ?>

    <div class="three wide column">
      <div class="ui card">
        <div class="image">
          <img src="<?=$baseUrl.$p['img'];?>" alt="" width="100" height="70">
        </div>
        <div class="content">
          <a class="header"><?= $p['name']." ".$p['lname'];?></a>
          <div class="meta">
            <span class="date"><?= $p['position'];?></span>
          </div>
          <div class="description">
            From : <img class="ui mini circular image" src="<?= $baseUrl.$t['img'] ?>"><br>
            Price : <?= $var['price'];?>
          </div>
        </div>
        <div class="extra content">

            <i class="user icon"></i>
            <a href="<?=$baseUrl."/trade/accept?id=".$var['_id']?>"><button class="ui grey button">Accept</button></a>
            <a href="<?=$baseUrl."/trade/refuse?id=".$var['_id']?>"><button class="ui grey button">Refuse</button></a>

        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endforeach; ?>

    </div>
  </div>

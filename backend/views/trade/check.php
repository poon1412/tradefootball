<?php
use backend\models\Player;
use backend\models\Team;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
$session = Yii::$app->session;
$user = $session->get('user');
$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
          <a href="<?=$baseUrl."/team/player"?>"><button  class="ui blue button big"><i class="icon user"></i>Player</button></a>
        <a href="<?=$baseUrl."/team/editteam"?>"><button  class="ui blue button big"><i class="icon Soccer"></i>Team</button></a>
        <a href="<?=$baseUrl."/trade"?>"><button  class="ui blue button big"><i class="icon Exchange"></i>Trade</button></a>
        <a href="<?=$baseUrl."/trade/message"?>"><button  class="ui blue button big"><i class="icon mail"></i>Message</button></a>
        <!-- <a href="<?=$baseUrl."/trade/check"?>"><button  class="ui blue button big"><i class="icon Write Square"></i>Check</button></a> -->
        <div  class="ui horizontal list topcorner">
          <div class="item">
            <img class="ui mini circular image" src="<?=$baseUrl.$user['img']?>">
              <div class="content">
                <div class="ui sub header">TEAM</div>
                <?= $user['name'] ?>
              </div>
            </div>
          </div>
          <a href="<?=$baseUrl."/auth/logout"?>"><button  class="ui blue button big" style="float: right;"><i class="icon lock in"></i>Logout</button></a>
        </div>
    </div>
  </div>
</div>
</div>

<!-- end main nav -->

</div>

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="one wide column"><br>
      <img src="<?=$baseUrl."/assets/logo/check.png"?>" alt="" width="100" height="70">
    </div>

    <div class="two wide column">
    </br>
      <h1 class="ui header">Check</h1>
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
  $t=Team::getTeam($var['_idget']);
   ?>
<?php if ($var['_idsend']==$user['_id']): ?>

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
            Send To : <img class="ui mini circular image" src="<?= $baseUrl.$t['img'] ?>"><br>
            Price : <?= $var['price'];?>
          </div>
        </div>
        <div class="extra content">

            <?php if ($var['status']=='Accept'):?>
              <i class="check square icon"></i> Status : Accept
            <?php endif; ?>
            <?php if ($var['status']=='Refuse'):?>
              <i class="remove circle icon"></i></i> Status : Refuse
            <?php endif; ?>
            <?php if ($var['status']=='Waiting'):?>
              <i class="wait icon"></i> Status : Waiting
            <?php endif; ?>


        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endforeach; ?>

    </div>
  </div>
  <div class="ui six column grid">
    <div class="row">
      <div class="column"></div>
  <div class="column"><?= LinkPager::widget(['pagination' => $pagination]) ?></div>
  </div>
  </div>

<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use backend\models\Player;
use backend\models\Team;
$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerCssFile ( "@web/assets/semantic/components/reset.css" );
$this->registerCssFile ( "@web/assets/semantic/components/site.css" );
$this->registerCssFile ( "@web/assets/semantic/components/container.css" );
$this->registerCssFile ( "@web/assets/semantic/components/grid.css" );
$this->registerCssFile ( "@web/assets/semantic/components/header.css" );
$this->registerCssFile ( "@web/assets/semantic/components/image.css" );
$this->registerCssFile ( "@web/assets/semantic/components/menu.css" );
$this->registerCssFile ( "@web/assets/semantic/components/divider.css" );
$this->registerCssFile ( "@web/assets/semantic/components/segment.css" );
$this->registerCssFile ( "@web/assets/semantic/components/form.css" );
$this->registerCssFile ( "@web/assets/semantic/components/input.css" );
$this->registerCssFile ( "@web/assets/semantic/components/button.css" );
$this->registerCssFile ( "@web/assets/semantic/components/list.css" );
$this->registerCssFile ( "@web/assets/semantic/components/message.css" );
$this->registerCssFile ( "@web/assets/semantic/components/icon.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style media="screen">
  a{
    color: white;
  }
</style>

<div class="Container">
  <div class="ui grid">
    <div class="column">
      <div class="ui one column grid">
        <div class="one column">
          <br><br>
          <a href="<?=$baseUrl."/home/site"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
          <div class="three column">
            <br><br><br> &nbsp;&nbsp;&nbsp;

            <a href="<?=$baseUrl."/home/player"?>" ><button  class="ui blue button big"><i class="icon user"></i>Player</button></a>
            <a href="<?=$baseUrl."/home/team"?>" ><button  class="ui blue button big"><i class="icon Soccer"></i>Team</button></a>

            <a href="<?=$baseUrl."/auth/login"?>" ><button  class="ui blue button big" style="float: right;"><i class="icon lock in"></i>Login</button></a>
          </div>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>
    <div class="column"></div>
    </div>
    </div>


<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>
<?php
foreach ($result as $var): ?>
    <div class="column">
      <div class="ui card">
        <div class="image">
          <img src="<?= $baseUrl.Player::getPlayer($var->_idplayer)['img'] ?>" alt="" width="100" height="70">
        </div>
        <div class="content">
          <a class="header"><?= Player::getPlayer($var->_idplayer)['name'].' '.Player::getPlayer($var->_idplayer)['lname'] ?></a>
          <div class="meta">
            <span class="date"><?= Player::getPlayer($var->_idplayer)['position'] ?></span>
          </div>
          <div class="description">
          <img class="ui mini circular image" src="<?= $baseUrl.Team::getTeam($var->_idold)['img'] ?>">
          <i class="Exchange icon"></i>
          <img class="ui mini circular image" src="<?= $baseUrl.Team::getTeam($var->_idnew)['img'] ?>">
          </div>
        </div>
        <div class="extra content">

            <i class="Dollar icon"></i>
              <?= $var->price?>

        </div>
      </div>
    </div>
<?php endforeach; ?>
  </div>
</div>
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>
<div class="column"><?= LinkPager::widget(['pagination' => $pagination]) ?></div>
</div>
</div>

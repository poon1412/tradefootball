<?php
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'index';
$session = Yii::$app->session;
$user = $session->get('user');
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
<!-- Latest compiled and minified CSS -->
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
<!-- top main -->
<!-- <div class="ui grid">
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column">
  <div class="ui horizontal list">
    <div class="item">
      <img class="ui mini circular image" src="/images/avatar2/small/molly.png">
        <div class="content">
          <div class="ui sub header">Molly</div>
          Coordinator
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- end top main -->

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
        <!-- <a href="<?=$baseUrl."/trade"?>"><button  class="ui blue button small"><i class="icon Exchange"></i>Trade</button></a> -->
        <a href="<?=$baseUrl."/trade/message"?>"><button  class="ui blue button big"><i class="icon mail"></i>Message</button></a>
        <a href="<?=$baseUrl."/trade/check"?>"><button  class="ui blue button big"><i class="icon Write Square"></i>Check</button></a>
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
<br>
<!-- end main nav -->


<div class="ui container">
  <div class="ui grid">
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>

    <form class="" action="" method="get">
  <div class="ui category search">
  <div class="ui icon input">

    <input class="prompt" type="text" name="search" placeholder="Search...">
    <i class="search icon"></i>

  </div>
  <div class="results"></div>
</div>
    </form>
</div>
<br>
  <table class="ui celled table">
  <thead>
    <tr>
      <th>NAME</th>
      <th>LASTNAME</th>
      <th>AGE</th>
      <th>WEIGTH</th>
      <th>HEIGHT</th>
      <th>D_M_Y</th>
      <th>TEAM</th>
      <th>POSITON</th>
      <th>NUMBER</th>
      <th>COUNTRY</th>
      <th>TRADE</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $var): ?>

        <tr>
          <td><?= $var['name'] ?></td>
          <td><?= $var['lname'] ?></td>
          <td><?= $var['age'] ?></td>
          <td><?= $var['weight'] ?></td>
          <td><?= $var['height'] ?></td>
          <td><?= $var['D_M_Y'] ?></td>
          <td><?= $var['team'] ?></td>
          <td><?= $var['position'] ?>r</td>
          <td><?= $var['number'] ?></td>
          <td><?= $var['country'] ?></td>
          <td>
            <form class="" action="<?=$baseUrl."/trade/transfer"?>" method="get">
            <input type="hidden" name="id" value="<?=$var['_id']?>">
            <button class="ui orange button "><i class="Handshake icon"></i> TRADE</a></button>
            </form>
          </td>
        </tr>
      

    <?php endforeach; ?>
  </tbody>
</table>
<div class="ui grid">
  <div class="nine wide column"></div>
  <div class="seven wide column " style="float: right;">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
  </div>
</div>



</div>

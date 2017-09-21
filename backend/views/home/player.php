<?php
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

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
$this->registerCssFile ( "@web/assets/semantic/Hplayer.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>
<!-- Latest compiled and minified CSS -->
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

            <button  class="ui blue button big"><a href="<?=$baseUrl."/home/team"?>" ><i class="icon Soccer"></i>Team</a></button>

            <button  class="ui blue button big" style="float: right;"><i class="icon lock in"></i><a href="<?=$baseUrl."/auth/login"?>" >Login</a></button>
          </div>
      </div>
    </div>
  </div>
  </div>
<br>

<div class="ui container">
  <div class="ui grid">
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <form  action="" method="get">
  <div class="ui category search">
  <div class="ui icon input">
    <input style="float: right;" class="prompt" type="text" name="search" placeholder="Search..." >
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
</from>
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
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

		<?= LinkPager::widget(['pagination' => $pagination]) ?>


</div>
</div>

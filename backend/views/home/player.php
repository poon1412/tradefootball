<?php
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>

<a href="<?=$baseUrl."/home/site"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>

<br>
</br>
<div class="ui container">
  <div class="ui grid">
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="ui category search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Search...">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
</div>
<br>
  <table class="ui celled table stackable">
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
  <tfoot>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
  </tfoot>
</table>

  </div>
</div>
</div>

<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>
<div class="ui container">

      <div class="ui two column  grid">
  <div class="column"></div>
  <div class="four column left aligned row">
    <div class="column"><div class="ui red button">
          <i class="heart icon"></i> Like
        </div> </div>
        <img src="<?=$baseUrl."/logo/logo.png"?>" alt="">

  </div>
</div>
</div>

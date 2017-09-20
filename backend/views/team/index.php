<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerCssFile ( "@web/assets/semantic/team.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>

<!-- btn logout -->
  <div class="ui grid right aligned">
    <div class=" sixteen wide column" id="logout">
      <button class="circular ui large icon button">
        <i class="sign out icon "></i>
      </button>
    </div>
  </div>

  

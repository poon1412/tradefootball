<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>
<div class="ui container">

    <a href="<?php echo "http://localhost/tradefootball/backend/web/home/site"; ?>"><img src="<?=$baseUrl."/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
    <a href="<?php echo "http://localhost/tradefootball/backend/web/home/player"; ?>"><button class="ui button">Player</button></a>
    <a href="<?php echo "http://localhost/tradefootball/backend/web/home/team"; ?>"><button class="ui button">Team</button></a>
    <button class="ui button">Button</button>
    <button class="ui button">Button</button>
</div>

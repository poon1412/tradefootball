<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>
<div class="ui container">

    <a href="<?php echo "http://localhost/tradefootball/backend/web/home/site"; ?>"><img src="<?=$baseUrl."/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>

<div class="ui two column grid">
</div>
	<br></br> 
	<br></br>  
    <div class="ui right aligned grid">
    	<div class="right floated left aligned seven wide column">
    		
      			<button class="ui inverted blue button">Player</button>
      			<button class="ui inverted blue button">Team</button>
      			<button class="ui inverted blue button">Index</button>
      			<button class="ui inverted blue button">Button</button>
    		</div>
      
    	</div>
	</div>

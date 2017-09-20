<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>

<div class="ui container">

<br></br>
    <a href="<?php echo "http://localhost/tradefootball/backend/web/home/site"; ?>"><img src="<?=$baseUrl."/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>

<div class="ui two column grid">
</div>
	<br></br> 
	<br></br>  
    <div class="ui right aligned grid">
    	<div class="right floated left aligned three wide column">
      			<button class="ui inverted orange button"><i class="icon Lock"></i>Login</button>
    		</div>
    	</div>
	</div>

<div class="ui two column grid">
</div>
	<br></br> 
	<br></br>  
	<div class="ui right aligned grid">
  		<div class="left floated right aligned four wide column">
      			<button class="ui inverted orange button"><i class="icon user"></i>Player</button>
				<button class="ui inverted orange button"><i class="icon Soccer"></i>Team</button>
    		</div>
    	</div>
	</div>






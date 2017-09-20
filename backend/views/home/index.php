<?php

/* @var $this yii\web\View */

$this->title = 'HOME';

?>
<?php  $baseUrl = \Yii::getAlias('@web'); ?>
<img class="bg" src="<?=$baseUrl."/assets/logo/bg.jpg"?>" alt="">

<!--
<div class="container" >
<br><br>
  <div class="" >
    <div class="text container" id="outPopUp">

      <h1 class="header ">
        Trade Football
      </h1>

      <div class="ui inverted blue button huge">
        Enter
        <i class="right arrow icon"></i>
      </div>
    </div>
  </div>
</div> -->

<!-- <div id="outPopUp">

  <h1 class="header ">
    Trade Football
  </h1>

  <div class="ui inverted blue button huge" >
    Enter
    <i class="right arrow icon"></i>
  </div>
</div> -->

<div class="ui four column grid" >
<br><br>
  <div class="row" id="outPopUp">
       <div class="column" >
         <h1 class="header ">
           <img class="sm" src="<?=$baseUrl."/assets/logo/logo.png"?>" alt="">
         </h1>
       </div>
  </div>
  <div class="column" id="outPopUp2">
    <div class="ui inverted blue button huge" >
      <a href="<?=$baseUrl."/home/site"?>">Enter  site</a>
      <i class="right Trophy icon"></i>
    </div>
  </div>
</div>

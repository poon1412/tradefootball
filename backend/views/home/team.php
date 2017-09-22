<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/slider.css" );
$this->registerCssFile ( "@web/assets/semantic/site.css" );
$this->registerJsFile('@web/assets/semantic/slider.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$baseUrl = \Yii::getAlias('@web');
?>
<style media="screen">
  a{
    color: white;
  }
</style>
<div class="relative">
  <br></br>
  <!-- base URL -->
      <a href="<?=$baseUrl."/home/site"?>"> <img id="img-fix" class="sm" src="<?=$baseUrl."/assets/logo/logo.png"?>" alt=""></a>
	<br></br>
	<br></br>
    <div class="" id="logout" >
    <a href="<?=$baseUrl."/auth/login"?>" ><button id="img-btn3" class="ui yellow button inverted">Login</button></a>
    </div><br><br><br>
    <a href="<?=$baseUrl."/home/player"?>" ><button id="img-btn2" class="ui yellow button">Player</button></a>

</div>



<div class="slider">

  <div class="slider-wrapper flex">

    <!-- query -->
    <?php foreach ($result as $var): ?>
    <div class="slide flex">
      <div class="slide-image slider-link prev"><img src="<?=$baseUrl.$var['img']?>" width="100px" height="400px">
        <div class="overlay"></div>
      </div>
      <div class="slide-content black">
        <div class="slide-title"><?= $var['name'] ?></div>
        <div class="slide-text">City :<?= $var['city']?><br> Stadium : <?= $var['stadium']?><br> Establish : <?= $var['establish']?><br> Address : <?= $var['address']?></div>
        <div class="slide-text">Manager :<?= $var['manager']?></div>
        <div class="slide-more"><a href="<?= $var['website']?>">VISIT SITE</a></div>
      </div>
    </div>
    <?php endforeach; ?>
    <!-- end query -->

  </div>
  <!-- end slider-wrapper  -->
  <!-- arrows -->
  <div class="arrows">
    <a href="#" title="Previous" class="arrow slider-link prev"></a>
    <a href="#" title="Next" class="arrow slider-link next"></a>
  </div>
  <!-- end arrows -->
</div>
<!-- end slider -->

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>

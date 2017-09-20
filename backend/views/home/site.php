<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/slider.css" );

$this->registerJsFile('@web/assets/semantic/slider.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$baseUrl = \Yii::getAlias('@web/');
?>

<div class="relative">
  <br></br>
  <!-- base URL -->
       <img id="img-fix" class="sm" src="<?=$baseUrl."/assets/logo/logo.png"?>" alt="">
	<br></br>
	<br></br>
    <div class="" id="logout" >
      			<button class="ui yellow button inverted">Login</button>
    </div><br><br><br>
    <button class="ui yellow button"><i class="icon user"></i>Player</button>
    <button class="ui yellow button"><i class="icon Soccer"></i>Team</button>
</div>



<div class="slider">

  <div class="slider-wrapper flex">

    <!-- query -->
    <div class="slide flex">
      <div class="slide-image slider-link prev"><img src="https://goranvrban.com/codepen/img2.jpg">
        <div class="overlay"></div>
      </div>
      <div class="slide-content black">
        <div class="slide-date">30.07.2017.</div>
        <div class="slide-title">LOREM IPSUM DOLOR SITE MATE, AD EST ABHORREANT</div>
        <div class="slide-text">Lorem ipsum dolor sit amet, ad est abhorreant efficiantur, vero oporteat apeirian in vel. Et appareat electram appellantur est. Ei nec duis invenire. Cu mel ipsum laoreet, per rebum omittam ex. </div>
        <div class="slide-more">READ MORE</div>
      </div>
    </div>
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

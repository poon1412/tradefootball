<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>

<br>
<br>
<div class="ui container">
  <div class="ui grid">
  <div class="one wide column"></div>
  <div class="four wide column">
    <img src="http://4.bp.blogspot.com/-o6YqOVG-e9Y/UDZYWI4czXI/AAAAAAAAB4Y/qgvtzvlDZkE/s1600/Transfer_Logo.jpg" wide="100" height="100" alt="">
  </div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column">
    <div class="ui card">
  <div class="image">
    <img src="https://i0.wp.com/footballburp.com/wp-content/uploads/2016/09/jose-mourinho-not-looking-happy.jpg?fit=640%2C427">
  </div>
  <div class="content">
    <a class="header">Mourinho</a>
    <div class="meta">
      <span class="position">Manager</span>
    </div>
    <div class="description">
      Kristy is an art director living in New York.
    </div>
  </div>
  <div class="extra content">
  </div>
</div>
  </div>

  <div class="seven wide column">
    <br>
    <br>
    <div class="ui tiny form">
  <div class="one fields">
    <div class="field">
      <label><h2>$Price</h2></label>
      <input placeholder="price" type="number" name="price">
    </div>
  </div>
  <button class="ui youtube button" name="submit">
  <i class="dollar icon"></i>
  Submit
</button>
  </div>
  <div class="four wide column">
    <br>
    <br>
    <br>
  </div>

</div>
</div>

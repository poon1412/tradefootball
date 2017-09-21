<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>


<div class="ui container">
  <div class="ui grid">
    <div class="four wide column"></div>
    <div class="four wide column"></div>
    <div class="four wide column"></div>
    <div class="four wide column ">
      <div class="ui horizontal list " style="float: right;">
        <div class="item" >
          <img class="ui mini circular image" src="/images/avatar2/small/molly.png">
            <div class="content">
              <div class="ui sub header">Molly</div>
                Coordinator
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- main nav -->
<div class="ui container">
<div class="ui grid">
  <div class="column">
    <div class="ui one column grid">
      <div class="one column">
        <a href="<?=$baseUrl."/team"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
        <div class="three column">
          <br><br><br> &nbsp;&nbsp;&nbsp;
          <button  class="ui blue button small"><i class="icon user"></i>Player</button>
          <button  class="ui blue button small"><i class="icon Soccer"></i>Team</button>
          <button  class="ui blue button small"><i class="icon Exchange"></i>Trade</button>
          <button  class="ui blue button small"><i class="icon mail"></i>Message</button>
          <button  class="ui blue button small" style="float: right;"><i class="icon lock in"></i>Logout</button>
        </div>
    </div>
  </div>
</div>
</div>
<br>
<!-- end main nav -->

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
      <input placeholder="price" type="text" name="price">
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

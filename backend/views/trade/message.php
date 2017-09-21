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
        <a href="<?=$baseUrl."/home/site"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
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

</div>
</br></br>
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="one wide column">
      <img src="https://cdn1.iconfinder.com/data/icons/social-media-14/96/Evernote-128.png" alt="" width="100" height="70">
    </div>

    <div class="two wide column">
    </br>
      <h1 class="ui header">Message</h1>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>



<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="column">
      <div class="ui card">
        <div class="image">
          <img src="http://www.manutd.com/~/media/510AE241278B45FF97125DC1E1E32CBF.ashx" alt="" width="100" height="70">
        </div>
        <div class="content">
          <a class="header">Kristy</a>
          <div class="meta">
            <span class="date">Joined in 2013</span>
          </div>
          <div class="description">
            Kristy is an art director living in New York.
          </div>
        </div>
        <div class="extra content">
          <a>
            <i class="user icon"></i>
            <button class="ui grey button">Accept</button>
            <button class="ui grey button">Refuse</button>
          </a>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="ui card">
        <div class="image">
          <img src="http://www.manutd.com/~/media/510AE241278B45FF97125DC1E1E32CBF.ashx" alt="" width="100" height="70">
        </div>
        <div class="content">
          <a class="header">Kristy</a>
          <div class="meta">
            <span class="date">Joined in 2013</span>
          </div>
          <div class="description">
            Kristy is an art director living in New York.
          </div>
        </div>
        <div class="extra content">
          <a>
            <i class="user icon"></i>
            <button class="ui grey button">Accept</button>
            <button class="ui grey button">Refuse</button>
          </a>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="ui card">
        <div class="image">
          <img src="http://www.manutd.com/~/media/510AE241278B45FF97125DC1E1E32CBF.ashx" alt="" width="100" height="70">
        </div>
        <div class="content">
          <a class="header">Kristy</a>
          <div class="meta">
            <span class="date">Joined in 2013</span>
          </div>
          <div class="description">
            Kristy is an art director living in New York.
          </div>
        </div>
        <div class="extra content">
          <a>
            <i class="user icon"></i>
            <button class="ui grey button">Accept</button>
            <button class="ui grey button">Refuse</button>
          </a>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="ui card">
        <div class="image">
          <img src="http://www.manutd.com/~/media/510AE241278B45FF97125DC1E1E32CBF.ashx" alt="" width="100" height="50">
        </div>
        <div class="content">
          <a class="header">Kristy</a>
          <div class="meta">
            <span class="date">Joined in 2013</span>
          </div>
          <div class="description">
            Kristy is an art director living in New York.
          </div>
        </div>
        <div class="extra content">
          <a>
            <i class="user icon"></i>
            <button class="ui grey button">Accept</button>
            <button class="ui grey button">Refuse</button>
          </a>
        </div>
      </div>
    </div>

  </div>

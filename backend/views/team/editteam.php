<?php

/* @var $this yii\web\View */
$session = Yii::$app->session;
$user = $session->get('user');
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
</div>
<br>
<!-- end main nav -->
</br></br>
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="one wide column">
      <img src="https://cdn3.iconfinder.com/data/icons/tango-icon-library/48/accessories-text-editor-128.png" alt="" width="100" height="70">
    </div>

    <div class="two wide column">
    </br>
      <h1 class="ui header">Edit Team</h1>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<form class="" action="<?= $baseUrl.'/team/saveteam' ?>" method="get">
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Name team</label>

          <input type="text" name="name" placeholder="name team" value="<?= $user['name'] ?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>City</label>
          <input type="text" name="city" placeholder="City" value="<?= $user['city'] ?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Stadium</label>
          <input type="text" name="stadium" placeholder="Stadium" value="<?= $user['stadium'] ?>">
        </div>
      </div>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Establish</label>
          <input type="text" name="establish" placeholder="establish" value="<?= $user['establish'] ?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Address</label>
          <input type="text" name="address" placeholder="address" value="<?= $user['address'] ?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Website</label>
          <input type="text" name ="website" placeholder="website" value="<?= $user['website'] ?>">
        </div>
      </div>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Manager</label>
          <input type="text" name ="manager" placeholder="manager" value="<?= $user['manager'] ?>">
        </div>
      </div>
    </div>

    <div class="one wide column"></div>

    <div class="one wide column"></div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<div class="ui grid">
    <div class="three wide column"></div>
    <div class="four wide column">
      <button class="ui green button"><i class="save icon"></i> Save</button></form>
      <button class="ui grey button"><i class="remove circle outline icon"></i> Cancel</button>
    </div>


  </div>

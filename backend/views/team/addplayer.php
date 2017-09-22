<?php

/* @var $this yii\web\View */
$session = Yii::$app->session;
$user = $session->get('user');
$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>
<style type="text/css">
 .topcorner{
   position:absolute;
   top:10;
   right:0;
  }
</style>
<!-- main nav -->
<br>
<div class="ui container">
<div class="ui grid">
  <div class="column">
    <div class="ui one column grid">
      <div class="one column">
        <a href="<?=$baseUrl."/team"?>"><img src="<?=$baseUrl."/assets/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>
        <div class="three column">
          <br><br><br> &nbsp;&nbsp;&nbsp;
            <a href="<?=$baseUrl."/team/player"?>"><button  class="ui blue button small"><i class="icon user"></i>Player</button></a>
          <a href="<?=$baseUrl."/team/editteam"?>"><button  class="ui blue button small"><i class="icon Soccer"></i>Team</button></a>
          <a href="<?=$baseUrl."/trade"?>"><button  class="ui blue button small"><i class="icon Exchange"></i>Trade</button></a>
          <a href="<?=$baseUrl."/trade/message"?>"><button  class="ui blue button small"><i class="icon mail"></i>Message</button></a>
          <a href="<?=$baseUrl."/trade/check"?>"><button  class="ui blue button small"><i class="icon Write Square"></i>Check</button></a>
          <div  class="ui horizontal list topcorner">
            <div class="item">
              <img class="ui mini circular image" src="<?=$baseUrl.$user['img']?>">
                <div class="content">
                  <div class="ui sub header">TEAM</div>
                  <?= $user['name'] ?>
                </div>
              </div>
            </div>
          <a href="<?=$baseUrl."/auth/logout"?>"><button  class="ui blue button small" style="float: right;"><i class="icon lock in"></i>Logout</button></a>
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
      <img src="<?=$baseUrl."/assets/logo/add.png"?>" alt="" width="100" height="70">
    </div>

    <div class="two wide column">
    </br>
      <h1 class="ui header">Add player</h1>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>
<form class="" action="<?=$baseUrl."/team/saveplayer"?>" method="get">


<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Firstname</label>
          <input type="text" placeholder="name" name="name">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Lastname</label>
          <input type="text" placeholder="last name" name="lname">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Age</label>
          <input type="number" placeholder="age" name="age">
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
          <label>Weight</label>
          <input type="number" placeholder="weight" name="weight">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Height</label>
          <input type="number" placeholder="height" name="height">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Day-Month-Year</label>
          <input type="text" placeholder="D-M-Y" name="D-M-Y">
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
          <label>Position</label>
          <select class="ui fluid dropdown" name="position">
          <option value="">State</option>
          <option value="Goalkeeper">Goalkeeper</option>
          <option value="Defender">Defender</option>
          <option value="Midfielder">Midfielder</option>
          <option value="Forward">Forward</option>
          </select>
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Number</label>
          <input type="number" placeholder="number" name="number">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Country</label>
          <input type="text" placeholder="country" name="country">
        </div>
      </div>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<div class="ui grid">
    <div class="three wide column"></div>
    <div class="one wide column">
      <button class="ui blue button">Save</button>
    </div>
  </form>
    <div class="one wide column">
      <a href="<?=$baseUrl."/team/player"?>"></a><button class="ui blue button">Cancel</button>
    </div>
    <div class="three column row">
  </div>

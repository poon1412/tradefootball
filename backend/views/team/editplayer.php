<?php
$session = Yii::$app->session;
$user = $session->get('user');
/* @var $this yii\web\View */

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
<!-- main nav --><br>
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


<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="two wide column">
      <img src="<?=$baseUrl.$model['img']?>" alt="" width="130" height="90">
    </div>

    <div class="two wide column">
    </br>
      <h1 class="ui header">Edit Player</h1>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>
<form class="ui form" action="<?=$baseUrl."/team/saveplayer"?>" method="get">

    <input type="hidden" name="id" value="<?=$model['_id']?>">
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="four wide column">
      <div class="ui form ">
        <div class="inline field">
          <label>First Name</label>
          <input type="text" size="35" name="name" placeholder="First Name" value="<?=$model['name']?>">
        </div>
      </div>
    </div>
    </br>
    </br>
    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Last Name</label>
          <input type="text" size="35" name="lname" placeholder="Last Name" value="<?=$model['lname']?>">
        </div>
      </div>
    </div>

    <div class="four wide column"></div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="three
     wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Age</label>
          <input type="number" size="2" name="age" placeholder="Age" value="<?=$model['age']?>">
        </div>
      </div>
    </div>

    <div class="three wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Weight</label>
          <input type="number" size="2" name="weight" placeholder="Weight" value="<?=$model['weight']?>">
        </div>
      </div>
    </div>

    <div class="three wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Height</label>
          <input type="number" size="2" name="height" placeholder="Height" value="<?=$model['height']?>">
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
        <div class="field">
          <label>D_M_Y</label>
          <input type="text" size="10" name="D_M_Y" placeholder="Date Month Year" value="<?=$model['D_M_Y']?>">
        </div>
      </div>
    </div>
    </div>

    <div class="four wide column">
    <div class="ui form">
      <div class="two fields">
        <div class="field">
          <label>Position</label>
          <select class="ui fluid dropdown" name="position">
            <option value="">State</option>
            <?php if ($model['position']=="Goalkeeper") {?>
              <option value="Goalkeeper" selected >Goalkeeper</option>
              <option value="Defender">Defender</option>
              <option value="Midfielder">Midfielder</option>
              <option value="Forward">Forward</option>
            <?php  }elseif ($model['position']=="Defender") {?>
              <option value="Goalkeeper">Goalkeeper</option>
              <option value="Defender" selected>Defender</option>
              <option value="Midfielder">Midfielder</option>
              <option value="Forward">Forward</option>
            <?php }elseif ($model['position']=="Midfielder") { ?>
              <option value="Goalkeeper">Goalkeeper</option>
              <option value="Defender" >Defender</option>
              <option value="Midfielder" selected>Midfielder</option>
              <option value="Forward">Forward</option>
            <?php }elseif ($model['position']=="Forward") { ?>
            <option value="Goalkeeper">Goalkeeper</option>
            <option value="Defender">Defender</option>
            <option value="Midfielder">Midfielder</option>
            <option value="Forward" selected>Forward</option>
          <?php }else{?>
            <option value="Goalkeeper">Goalkeeper</option>
            <option value="Defender">Defender</option>
            <option value="Midfielder">Midfielder</option>
            <option value="Forward">Forward</option>
          <?php  }?>
          </select>
        </div>
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

    <div class="three wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Number</label>
          <input type="text" name="number" size="30" placeholder="Shirt Number" value="<?=$model['number']?>">
        </div>
      </div>
    </div>

    <div class="three wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Country</label>
          <input type="text" name="country" size="30" placeholder="Country" value="<?=$model['country']?>">
        </div>
      </div>
    </div>
<!--
    <div class="one wide column">
      <div class="five wide column">
        <div class="ui form ">
          <div class="inline field">
            <label>Country</label>
            <input type="text" name="country" size="30" placeholder="Country" value="<?=$model['country']?>">
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>

  <div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

  <div class="one wide column">

   <button class="ui primary button">Save</button>
  </div>


  </form>
  <form class="" action="<?=$baseUrl."/team/player"?>" method="get">
  <div class="column">
    <div class="two wide column">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button class="ui button">
  Discard
   </button>
  </div>
  </div>
  </form>
</div>
</div>
</div>

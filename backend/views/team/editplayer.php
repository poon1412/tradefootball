<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web');
?>

</br></br>
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
          <input type="number" name="number" size="3" placeholder="Shirt Number" value="<?=$model['number']?>">
        </div>
      </div>
    </div>

    <div class="one wide column">
      <div class="five wide column">
        <div class="ui form ">
          <div class="inline field">
            <label>Country</label>
            <input type="text" name="country" size="30" placeholder="Country" value="<?=$model['country']?>">
          </div>
        </div>
      </div>
    </div>
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
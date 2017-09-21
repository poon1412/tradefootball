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
<form class="" action="<?=$baseUrl."/team/saveplayer"?>" method="get">
    <input type="hidden" name="id" value="<?=$model['_id']?>">
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="five wide column">
      <div class="ui form ">
        <div class="inline field">
          <label>Firstname</label>
          <input type="text" size="50" name="name" value="<?=$model['name']?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Lastname</label>
          <input type="text" size="50" name="lname" value="<?=$model['lname']?>">
        </div>
      </div>
    </div>

    <div class="four wide column"></div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="two wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Age</label>
          <input type="number" size="3" name="age" value="<?=$model['age']?>">
        </div>
      </div>
    </div>

    <div class="two wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Weight</label>
          <input type="number" size="3" name="weight" value="<?=$model['weight']?>">
        </div>
      </div>
    </div>

    <div class="two wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Height</label>
          <input type="number" size="3" name="height" value="<?=$model['height']?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>D-M-Y</label>
          <input type="text" size="10" name="D_M_Y" value="<?=$model['D_M_Y']?>">
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

    <div class="two wide column">
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

    <div class="one wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Number</label>
          <input type="number" name="number" size="3" value="<?=$model['number']?>">
        </div>
      </div>
    </div>

    <div class="one wide column">
      <div class="five wide column">
        <div class="ui form ">
          <div class="inline field">
            <label>Country</label>
            <input type="text" name="country" size="30" value="<?=$model['country']?>">
          </div>
        </div>
      </div>
    </div>


  </div>
  <br></br>
  <br>
  <div class="three wide column">
  </div>
  <div class="one wide column">
    <button class="ui primary button">
  Save
</button>
  </div>
  </form>
  <form class="" action="<?=$baseUrl."/team/player"?>" method="get">
  <div class="column">
    <button class="ui button">
  Discard
</button>
  </div>
  </form>
</div>

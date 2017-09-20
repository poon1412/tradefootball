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

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="five wide column">
      <div class="ui form ">
        <div class="inline field">
          <label>Firstname</label>
          <input type="text" size="50" placeholder="<?=$model['name']?>">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Lastname</label>
          <input type="text" size="50" placeholder="lastname">
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
          <input type="text" size="3" placeholder="age">
        </div>
      </div>
    </div>

    <div class="two wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Weight</label>
          <input type="text" size="3" placeholder="weight">
        </div>
      </div>
    </div>

    <div class="two wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Height</label>
          <input type="text" size="3" placeholder="height">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>D-M-Y</label>
          <input type="text" size="10" placeholder="d/m/y">
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
          <select class="ui fluid dropdown">
            <option value="">State</option>
            <option value="AL">Goalkeeper</option>
            <option value="AK">Defender</option>
            <option value="AZ">Midfielder</option>
            <option value="AZ">Forward</option>
          </select>
        </div>
      </div>
    </div>

    <div class="one wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Number</label>
          <input type="text" size="3" placeholder="number">
        </div>
      </div>
    </div>

    <div class="one wide column">
      <div class="five wide column">
        <div class="ui form ">
          <div class="inline field">
            <label>Country</label>
            <input type="text" size="30" placeholder="country">
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
  <div class="column">
    <button class="ui button">
  Discard
</button>
  </div>

</div>

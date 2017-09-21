<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>

</br></br>
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="one wide column">
      <img src="https://cdn0.iconfinder.com/data/icons/Hand_Drawn_Web_Icon_Set/128/user_add.png" alt="" width="100" height="70">
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

<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Firstname</label>
          <input type="text" name="name" placeholder="name">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Lastname</label>
          <input type="text" name="lname" placeholder="last name">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Age</label>
          <input type="number" placeholder="age">
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
          <input type="text" placeholder="weight">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Height</label>
          <input type="text" placeholder="height">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Day-Month-Year</label>
          <input type="text" placeholder="D-M-Y">
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
          <input type="text" placeholder="position">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Number</label>
          <input type="text" placeholder="number">
        </div>
      </div>
    </div>

    <div class="four wide column">
      <div class="ui form">
        <div class="inline field">
          <label>Country</label>
          <input type="text" placeholder="country">
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
    <div class="one wide column">
      <button class="ui blue button">Cancel</button>
    </div>
    <div class="three column row">
  </div>

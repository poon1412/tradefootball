<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl = \Yii::getAlias('@web/assets');
?>
<a href="<?php echo "http://localhost/tradefootball/backend/web/home/site"; ?>"><img src="<?=$baseUrl."/logo/logo.png"?>" width=150 height=100 ALIGN="LEFT" alt=""></a>

</br>
<div class="ui six column grid">
  <div class="row">
    <div class="column"></div>

    <div class="column">
      <img src="https://www.hcltech.com/sites/default/files/left_mu.png" alt="" width="280" height="160">
    </div>

    <div class="four wide column">
    </br>
      <h1 class="ui header">MANCHESTER UNITED</h1>
    </div>

  </div>
  <div class="one wide column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>Name : </h3> </div>
        <div class="three wide column">MANCHESTER UNITED</div>
      </div>
    </div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>City : </h3> </div>
        <div class="one wide column">MANCHESTER</div>
      </div>
    </div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>Stadium : </h3> </div>
        <div class="two wide column">Old Trafford</div>
      </div>
    </div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>Establish : </h3> </div>
        <div class="two wide column">1878</div>
      </div>
    </div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>Address : </h3> </div>
        <div class="five wide column">Sir Matt Busby Way, Old Trafford, GB- MANCHESTER M16 0RA</div>
      </div>
    </div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>Website : </h3> </div>
        <div class="five wide column">http://www.manutd.com</div>
      </div>
    </div>

    <div class="ui six column grid">
      <div class="row">
        <div class="column"></div>
        <div class="two wide column"></div>
        <div class="two wide column"><h3>Manager : </h3> </div>
        <div class="five wide column">Jose Mourinho</div>
      </div>
    </div>

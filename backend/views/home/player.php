<?php

/* @var $this yii\web\View */

$this->title = 'index';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<br>
</br>
<div class="ui container">
  <div class="ui grid">
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="four wide column"></div>
  <div class="ui category search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Search...">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
</div>
<br>
  <table class="ui celled table stackable">
  <thead>
    <tr><th>NAME</th>
    <th>LASTNAME</th>
    <th>AGE</th>
    <th>WEIGTH</th>
    <th>HEIGHT</th>
    <th>D_M_Y</th>
    <th>TEAM</th>
    <th>POSITON</th>
    <th>NUMBER</th>
    <th>COUNTRY</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>Paul</td>
      <td>Pogba</td>
      <td>24</td>
      <td>83</td>
      <td>176</td>
      <td>1993-03-15</td>
      <td>Manchester united</td>
      <td>Midfielder</td>
      <td>6</td>
      <td>France</td>
    </tr>
    <tr>
      <td>David</td>
      <td>De Gea</td>
      <td>21</td>
      <td>76</td>
      <td>193</td>
      <td>1996-05-15</td>
      <td>Manchester united</td>
      <td>Goalkeeper</td>
      <td>1</td>
      <td>France</td>
    </tr>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="10">
      <div class="ui right floated pagination menu">
        <a class="icon item">
          <i class="left chevron icon"></i>
        </a>
        <a class="item">1</a>
        <a class="item">2</a>
        <a class="item">3</a>
        <a class="item">4</a>
        <a class="icon item">
          <i class="right chevron icon"></i>
        </a>
      </div>
    </th>
  </tr></tfoot>
</table>
  </div>
</div>
</div>

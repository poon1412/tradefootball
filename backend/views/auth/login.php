<?php
$this->title = 'login';

$baseUrl=\Yii::getAlias('@web');
if (isset($session->hasFlash('danger'))) {
  echo $session->getFlash('danger');
}

 ?>

 <div class="ui middle aligned center aligned grid">
   <div class="column">
     <h2 class="ui teal image header">
       <img src="https://cdn.dribbble.com/users/74403/screenshots/1211840/icon-football.gif" class="image">
       <div class="content">
        EPL Team Log in
       </div>
     </h2>
     <form class="ui large form" action="<?=$baseUrl."/auth/loginaction"?>" method="post">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <!-- <div class="ui fluid large teal submit button">Login</div> -->
        <button class="fluid positive ui button " type="submit">Log in  <i class="sign in icon"></i></button>
      </div>

      <div class="ui error message"></div>

    </form>

     <div class="ui message">
       <a href="https://www.premierleague.com/">Welcome to England Premier League</a>
     </div>
   </div>
 </div>

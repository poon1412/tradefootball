<?php
$this->title = 'login';
$this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
$this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$baseUrl=\Yii::getAlias('@web');
 ?>

   <script src="assets/library/jquery.min.js"></script>
   <script src="../dist/components/form.js"></script>
   <script src="../dist/components/transition.js"></script>

   <style type="text/css">
     body {
       background-color: #DADADA;
     }
     body > .grid {
       height: 100%;
     }
     .image {
       margin-top: -100px;
     }
     .column {
       max-width: 450px;
     }
   </style>
   <script>
   $(document)
     .ready(function() {
       $('.ui.form')
         .form({
           fields: {
             email: {
               identifier  : 'email',
               rules: [
                 {
                   type   : 'empty',
                   prompt : 'Please enter your e-mail'
                 },
                 {
                   type   : 'email',
                   prompt : 'Please enter a valid e-mail'
                 }
               ]
             },
             password: {
               identifier  : 'password',
               rules: [
                 {
                   type   : 'empty',
                   prompt : 'Please enter your password'
                 },
                 {
                   type   : 'length[1]',
                   prompt : 'Your password must be at least 1 characters'
                 }
               ]
             }
           }
         })
       ;
     })
   ;
   </script>



 <div class="ui middle aligned center aligned grid">
   <div class="column">
     <h2 class="ui teal image header">
       <img src="https://cdn.dribbble.com/users/74403/screenshots/1211840/icon-football.gif" class="image">
       <div class="content">
        EPL Team Log in
       </div>
     </h2>
     <form class="ui large form" action="<?=$baseUrl."/auth/loginaction"?>">
       <div class="ui stacked segment">
         <div class="field">
           <div class="ui left icon input">
             <i class="user icon"></i>
             <input type="text" name="username" placeholder="Username">
           </div>
         </div>
         <div class="field">
           <div class="ui left icon input">
             <i class="lock icon"></i>
             <input type="password" name="password" placeholder="Password">
           </div>
         </div>
         <div class="ui fluid large teal submit button">Log in</div>
       </div>

       <div class="ui error message"></div>

     </form>

     <div class="ui message">
       <a href="https://www.premierleague.com/">Welcome to England Premier League</a>
     </div>
   </div>
 </div>

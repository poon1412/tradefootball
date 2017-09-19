<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */
// dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Morphing Page Transition | Demo 3 | Codrops</title>
		<meta name="description" content="A page transition where one SVG path is morphed into another" />
		<meta name="keywords" content="page transition, svg, morph, path, javascript, web design, web dev" />
		<meta name="author" content="Codrops" />

  <!-- Site Properties -->
  <title>Homepage - TradeFootball</title>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerCssFile ( "@web/assets/HomeCSS/css/swing.css" );
    $this->registerCssFile ( "@web/assets/HomeCSS/css/style7.css" );
    $this->registerCssFile ( "@web/assets/HomeCSS/css/sreach.css" );
    $this->registerCssFile ( "@web/assets/HomeCSS/css/normalize.css" );
    $this->registerCssFile ( "@web/assets/HomeCSS/css/demo.css" );
    $this->registerCssFile ( "@web/assets/HomeCSS/css/btt.css" );
    $this->registerJsFile('@web/assets/HomeCSS/css/swing.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/HomeCSS/css/sreach.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/HomeCSS/css/imagesloaded.pkgd.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/HomeCSS/css/demo3.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/HomeCSS/css/demo.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/HomeCSS/css/charming.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/HomeCSS/css/anime.min.js',['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <script>document.documentElement.className = 'js';</script>
</head>


<body class="demo-3 render">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

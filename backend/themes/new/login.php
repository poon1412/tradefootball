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
		<title>Trade Football Login</title>
		<meta name="description" content="A page transition where one SVG path is morphed into another" />
		<meta name="keywords" content="page transition, svg, morph, path, javascript, web design, web dev" />
		<meta name="author" content="Codrops" />

  <!-- Site Properties -->
  <title>TradeFootball</title>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerCssFile ( "@web/assets/semantic/semantic.min.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/reset.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/site.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/container.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/grid.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/header.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/image.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/menu.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/divider.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/segment.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/form.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/input.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/button.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/list.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/message.css" );
    $this->registerCssFile ( "@web/assets/semantic/components/icon.css" );
    $this->registerJsFile('@web/assets/semantic/semantic.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/semantic/lib/jquery.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/semantic/components/form.js',['depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('@web/assets/semantic/components/transition.js',['depends' => [\yii\web\JqueryAsset::className()]]); ?>

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

</head>


<body>

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

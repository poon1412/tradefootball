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
		<title>Trade Football Site</title>
		<meta name="description" content="A page transition where one SVG path is morphed into another" />
		<meta name="keywords" content="page transition, svg, morph, path, javascript, web design, web dev" />
		<meta name="author" content="Codrops" />

  <!-- Site Properties -->
  <title>TradeFootball</title>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body>

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

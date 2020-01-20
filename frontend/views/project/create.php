<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Project */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<div class="col-md-6" style="margin: 0 auto; float:none;">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>

</div>
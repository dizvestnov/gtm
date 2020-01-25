<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Project */

$this->title = 'Update Project: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<div class="col-md-6" style="margin: 0 auto; float:none;">
		<?= $this->render('_form', [
			'model' => $model,
			'author' => $author,
		]) ?>
	</div>

</div>
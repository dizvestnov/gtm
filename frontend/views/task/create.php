<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Task */

$this->title = 'Create Task';
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<div class="col-md-6" style="margin: 0 auto; float:none;">
		<?= $this->render('_form', [
			'model' => $model,
			'creator' => $creator,
			'responsible' => $responsible,
			'performer' => $performer,
			'projects' => $projects,
		]) ?>
	</div>

</div>
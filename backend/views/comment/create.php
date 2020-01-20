<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */

$this->title = 'Create Comment';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<div class="col-md-6" style="margin: 0 auto; float:none;">
		<?= $this->render('_form', [
			'model' => $model,
			'tasks' => $tasks,
		]) ?>
	</div>

</div>
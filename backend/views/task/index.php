<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<p class="text-right">
		<?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			// 'id',
			'project.name',
			'name',
			// 'description:ntext',
			'creator.username',
			'responsible.username',
			'performer.username',
			'status.name',
			'priority.name',
			'created_at:datetime',
			'updated_at:datetime',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>


</div>
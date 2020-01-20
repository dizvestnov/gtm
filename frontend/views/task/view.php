<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Task */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-view">

	<h4 class="text-center"><?= Html::encode($model->project->name) ?></h4>
	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>
	<p class="text-center" style="max-width: 40vw; margin: 1.6em auto;"> <?= Html::encode($model->description) ?> </p>

	<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 5em; margin-top: -7em; ">
		<div>
			<div>Приоритет: <span style="text-transform: uppercase;"> <?= Html::encode($model->priority->name) ?> </span> </div>
			<div>Статус: <span style="text-transform: uppercase;"> <?= Html::encode($model->status->name) ?> </span> </div>
		</div>
		<div>
			<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->id], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			]) ?>
		</div>
	</div>

	<div class="row" style="display: flex">
		<div class="col-md-6" style="margin: 0 auto; float:none;">
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					'creator.username',
					'responsible.username',
					'performer.username',
					'created_at:datetime',
					'updated_at:datetime',
				],
			]) ?>
		</div>

		<div class="col-md-5" style="margin: 0 auto; float:none;">
			<?= \yii\grid\GridView::widget([
				'dataProvider' => $commentDataProvider,
				// 'filterModel' => $commentSearchModel,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					// 'id',
					'text:ntext',
					['class' => 'yii\grid\ActionColumn'],
				],
			]); ?>
		</div>
	</div>
</div>
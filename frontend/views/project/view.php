<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Project;

/* @var $this yii\web\View */
/* @var $model common\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<div class="row" style="display: flex; margin-top: 2em;">
		<div class="col-md-3" style="margin: 0 auto; float:none;">
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					'id',
					// [
					// 	'label' => 'Название',
					// 	'value' => function (Project $model) {
					// 		return $model->name;
					// 	}
					// ],
					[
						'label' => 'Автор',
						'value' => function (Project $model) {
							return $model->author->username;
						}
					],
					[
						'label' => 'Статус',
						'value' => function (Project $model) {
							return $model->projectStatus->name;
						}
					],
					'created_at:datetime',
					'updated_at:datetime',
				],
			]) ?>

			<p class="text-right">
				<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
				<?= Html::a('Delete', ['delete', 'id' => $model->id], [
					'class' => 'btn btn-danger',
					'data' => [
						'confirm' => 'Are you sure you want to delete this item?',
						'method' => 'post',
					],
				]) ?>
			</p>
		</div>
		<div class="col-md-9" style="margin: 0 auto; float:none;">
			<?= \yii\grid\GridView::widget([
				'dataProvider' => $taskDataProvider,
				// 'filterModel' => $taskSearchModel,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					'name',
					'status.name',
					'priority.name',
					'description:ntext',
					'creator.username',
					// 'responsible.username',
					// 'performer.username',
					['class' => 'yii\grid\ActionColumn'],
				],
			]); ?>
		</div>
	</div>

	<?= \common\widgets\chat\ChatWidget::widget() ?>

</div>
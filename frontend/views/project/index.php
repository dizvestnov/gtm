<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Project;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

	<h1 class="text-center"><?= Html::encode($this->title) ?></h1>

	<p class="text-right">
		<?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); 
	?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			// 'id',
			[
				'label' => 'Название',
				'value' => function (Project $model) {
					return $model->name;
				}
			],
			// [
			// 	'label' => 'Автор',
			// 	'value' => function (Project $model) {
			// 		return $model->author->username;
			// 	}
			// ],
			[
				'label' => 'Статус',
				'value' => function (Project $model) {
					return $model->projectStatus->name;
				}
			],
			'created_at:datetime',
			'updated_at:datetime',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>


</div>
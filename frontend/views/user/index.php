<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My account';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); 
	?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			// 'id',
			'username',
			'email:email',
			'created_at:datetime',
			'updated_at:datetime',
			// 'auth_key',
			// 'password_hash',
			// 'password_reset_token',
			// 'status',
			//'verification_token',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
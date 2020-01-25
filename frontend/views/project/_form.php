<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\ProjectStatus;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
/* @var $creator \common\models\User[] */
?>

<div class="project-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'author_id')->dropDownList($author) ?>

	<?= $form->field($model, 'project_status_id')->dropDownList(ProjectStatus::getProjectStatusName()) ?>

	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
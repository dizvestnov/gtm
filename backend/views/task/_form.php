<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\TaskStatus;
use common\models\TaskPriority;
/* @var $this yii\web\View */
/* @var $model common\models\Task */
/* @var $form yii\widgets\ActiveForm */
/* @var $creator \common\models\User[] */
/* @var $projects \common\models\Project[] */
?>

<div class="task-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'project_id')->dropDownList($projects) ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'responsible_id')->dropDownList($responsible) ?>

	<?= $form->field($model, 'performer_id')->dropDownList($performer) ?>

	<?= $form->field($model, 'status_id')->dropDownList(TaskStatus::getStatusName()) ?>

	<?= $form->field($model, 'priority_id')->dropDownList(TaskPriority::getPriorityName()) ?>

	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
<?php

namespace common\models;

// use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "task_priority".
 *
 * @property int $id
 * @property string $name
 *
 * @property Task[] $tasks
 */
class TaskPriority extends ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'task_priority';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			['name', 'required'],
			['name', 'unique', 'targetClass' => 'common\models\Task', 'message' => 'This Task Priority Name has already been taken.'],
			[['name'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Task Priority Name',
		];
	}

	/**
	 * @return ActiveQuery
	 */
	public function getTasks()
	{
		return $this->hasMany(Task::class, ['priority_id' => 'id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public static function getPriorityName()
	{
		return ArrayHelper::map(self::find()->asArray()->all(), 'id', 'name');
	}
}

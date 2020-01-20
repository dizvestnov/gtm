<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use common\components\behaviors\ChatLogBehavior;
use common\components\interfaces\ChatLoggable;

/**
 * This is the model class for table "task_status".
 *
 * @property int $id
 * @property string $name
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Task[] $tasks
 */
class TaskStatus extends ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'task_status';
	}

	public function behaviors()
	{
		return [
			'timestampBehavior' => [
				'class' => TimestampBehavior::class,
				'attributes' => [
					ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
					ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
					'value' => time(),
				],
			],
			'chatLogBehavior' => [
				'class' => ChatLogBehavior::class,
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			['name', 'required'],
			['name', 'unique', 'targetClass' => 'common\models\Task', 'message' => 'This Task Status Name has already been taken.'],
			[['created_at', 'updated_at'], 'integer'],
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
			'name' => 'Task Status Name',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * @return ActiveQuery
	 */
	public function getTasks(): ActiveQuery
	{
		return $this->hasMany(Task::class, ['status_id' => 'id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public static function getStatusName()
	{
		return ArrayHelper::map(self::find()->asArray()->all(), 'id', 'name');
	}
}

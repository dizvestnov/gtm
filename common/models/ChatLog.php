<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use common\models\User;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "chat_log".
 *
 * @property int $id
 * @property int $task_id
 * @property int $project_id
 * @property int $type
 * @property int $user_id
 * @property string $username
 * @property string $message
 * @property string $created_at
 */
class ChatLog extends ActiveRecord
{

	const TYPE_HELLO_MESSAGE = 1;
	const TYPE_CHAT_MESSAGE = 2;
	const TYPE_SHOW_HISTORY_MESSAGE = 3;
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'chat_log';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			['created_at', 'safe'],
			[['message'], 'string', 'max' => 255],
			[['user_id', 'task_id', 'project_id', 'type'], 'integer']
		];
	}

	public function behaviors()
	{
		return [
			'timestampBehavior' => [
				'class' => TimestampBehavior::class,
				'attributes' => [
					ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
					ActiveRecord::EVENT_BEFORE_UPDATE => false,
					'value' => time(),
				],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'message' => 'Message',
			'created_at' => 'Created At',
		];
	}

	public static function saveLog(array $msg)
	{
		try {
			$model = new self([
				// 'username' => $msg['username'],
				'user_id' => $msg['user_id'],
				'message' => $msg['message'],
			]);
			$model->project_id = $msg['project_id'] ?? null;
			$model->task_id = $msg['task_id'] ?? null;
			$model->type = $msg['type'] ?? null;

			$model->created_at = time();
			$model->save();
		} catch (\Throwable $exception) {
			Yii::error($exception->getMessage());
		}
	}

	public function asJson()
	{
		return json_encode($this->toArray());
	}

	public function fields()
	{
		return array_merge(parent::fields(), [
			'created_datetime' => function () {
				return Yii::$app->formatter->asDatetime($this->created_at);
			}
		]);
	}

	public function getUser(): ActiveQuery
	{
		return $this->hasOne(User::class, ['id' => 'user_id']);
	}

	/**
	 * @param $data
	 * @return \yii\db\ActiveQuery
	 */
	public static function findChatMessages($data)
	{
		$project_id = $data['project_id'] ?? null;
		$task_id = $data['task_id'] ?? null;

		$query = ChatLog::find()
			->select([
				'chat_log.id',
				'user.username',
				'chat_log.message',
				'chat_log.created_at',
				// 'chat_log.project_id',
				// 'chat_log.task_id',
				// 'chat_log.type',
				// 'chat_log.user_id',
			])
			->innerJoinWith('user')
			->andFilterWhere([
				'project_id' => $project_id,
				'task_id' => $task_id,
				'type' => ChatLog::TYPE_CHAT_MESSAGE
			])
			->orderBy('created_at ASC')
			->limit(100);

		return $query;
	}
}

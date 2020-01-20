<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "project_status".
 *
 * @property int $id
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Project[] $projects
 */
class ProjectStatus extends ActiveRecord
{
	const ARCHIVED_ID = 1;
	const FINISHED_ID = 2;

	public static function tableName()
	{
		return 'project_status';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['name'], 'required'],
			['name', 'unique', 'targetClass' => 'common\models\Project', 'message' => 'This Project Status Name has already been taken.'],
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
			'name' => 'Project Status Name',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * @return ActiveQuery
	 */
	public function getProjects()
	{
		return $this->hasMany(Project::class, ['project_status_id' => 'id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public static function getProjectStatusName()
	{
		return ArrayHelper::map(self::find()->asArray()->all(), 'id', 'name');
	}
}

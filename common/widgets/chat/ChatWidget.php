<?php

namespace common\widgets\chat;

use Yii;
use yii\base\Widget;

class ChatWidget extends Widget
{
	public $username;
	public $user_id;
	public $task_id;
	public $project_id;

	public function init()
	{
		parent::init();
		ChatAsset::register($this->view);
		if (Yii::$app->user->isGuest) {
			// Сообщение гостя не сохраняется в бд

			$this->username = 'Guest';
			$this->user_id = null;
		} else {
			$this->username = Yii::$app->user->identity->username;
			$this->user_id = Yii::$app->user->id;
		}

		$this->view->registerMetaTag(['name' => 'chat-widget-project-id', 'content' => $this->project_id]);
		$this->view->registerMetaTag(['name' => 'chat-widget-task-id', 'content' => $this->task_id]);
		$this->view->registerMetaTag(['name' => 'chat-widget-username', 'content' => $this->username]);
		$this->view->registerMetaTag(['name' => 'chat-widget-user-id', 'content' => $this->user_id]);
	}

	public function run()
	{
		return $this->render('index');
	}

	// public function init()
	// {
	// 	parent::init();
	// 	ChatAsset::register($this->view);
	// 	if (\Yii::$app->user->isGuest) {
	// 		$this->username = 'guest' . time();
	// 	} else {
	// 		$this->username = \Yii::$app->user->identity->username;
	// 	}
	// }

	// public function run()
	// {
	// 	return $this->render('index');
	// }
}

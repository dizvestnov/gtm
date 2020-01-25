<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ChatController extends Controller
{
	public function actionIndex()
	{
		// if (!Yii::$app->user->isGuest) {
		// 	// if (Yii::$app->user->can('user')) {
		// 	// $user_id = Yii::$app->user->identity->id;
		// 	$username = Yii::$app->user->identity->username;

		// 	return $this->render('index', [
		// 		// 'user_id' => $user_id,
		// 		'username' => $username,
		// 	]);
		// } else {
		// 	return $this->goHome();
		// }
		return $this->render('index');
	}
}

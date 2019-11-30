<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\console\Exception;
use yii\base\InvalidRouteException;

class RbacController extends Controller
{
	/**
	 * Инициализация RBAC миграций и ролей
	 * php yii rbac/init
	 * 
	 * @throws InvalidRouteException
	 * @throws Exception
	 * @throws \Exception
	 */

	public function actionInit()
	{
		// Аналогично выполнению в терминале 'php yii migrate --migrationPath=@yii/rbac/migrations'
		Yii::$app->runAction('migrate', ['migrationPath' => '@yii/rbac/migrations']);

		// Компонент управления rbac
		$auth = Yii::$app->authManager;

		/**
		 * Создание ролей пользователей
		 */
		// Пользователь
		$roleUser = $auth->createRole('user');
		$roleUser->description = 'Пользователь';
		$auth->add($roleUser);

		// Менеджер
		$roleManager = $auth->createRole('manager');
		$roleManager->description = 'Менеджер';
		$auth->add($roleManager);
		$auth->addChild($roleManager, $roleUser); // Менеджер наследует права Пользователя

		// Администратор
		$roleAdmin = $auth->createRole('admin');
		$roleAdmin->description = 'Администратор';
		$auth->add($roleAdmin);
		$auth->addChild($roleAdmin, $roleManager); // Менеджер наследует права Пользователя

		/**
		 * Установка ролей на пользователей
		 */
		$auth->assign($roleAdmin, 1);
		$auth->assign($roleManager, 2);
		$auth->assign($roleUser, 3);
	}
}

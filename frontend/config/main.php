<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
		'assetManager' => [
			'appendTimestamp' => true,
		],

		'request' => [
			'csrfParam' => '_csrf-frontend',
			'parsers' => [
				'application/json' => \yii\web\JsonParser::class,
				'charset' => 'UTF-8'
			],
		],

		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],

		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],

		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],

		'errorHandler' => [
			'errorAction' => 'site/error',
		],

		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				// [
				// 	'controller' => 'api/task',
				// 	'class' => \yii\rest\UrlRule::class,
				// 	//отключим трансформацию task в tasks
				// 	'extraPatterns' => [
				// 		//'METHOD action' => 'actionFunction',
				// 		'POST random/<count>' => 'random',
				// 	],
				// ],
				// [
				// 	'class' => \yii\rest\UrlRule::class,
				// 	'controller' => 'api/user',
				// 	'extraPatterns' => [
				// 		// actions
				// 		'GET me' => 'me',
				// 		'GET <id>/tasks' => 'tasks',
				// 	],
				// ],
			],
		],

		/* 'view' => [
			'theme' => [
				'basePath' => '@app/themes/adminlte',
				'baseUrl' => '@web/themes/adminlte',
				'pathMap' => [
					'@app/views' => '@app/themes/adminlte',
				],
			],
		],

		'assetManager' => [
			'bundles' => [
				'dmstr\web\AdminLteAsset' => [
					'skin' => 'skin-blue',
				],
			],
		], */

	],
	'params' => $params,
];

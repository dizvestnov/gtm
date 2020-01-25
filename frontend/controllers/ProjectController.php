<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\Project;
use common\models\ProjectStatus;
use frontend\models\ProjectSearch;
use frontend\models\TaskSearch;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
	/**
	 * {@inheritdoc}
	 */
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	/**
	 * Lists all Project models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		if (empty(ProjectStatus::getProjectStatusName())) {
			$projectStatusName = ['archived', 'finish', 'new', 'in progress', 'suspended'];
			foreach ($projectStatusName as $statusName) {
				$projectStatus = new ProjectStatus();
				$projectStatus->name = $statusName;
				$projectStatus->save();
			}
		}
		$searchModel = new ProjectSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Project model.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionView($id)
	{
		$taskSearchModel = new TaskSearch();
		$taskDataProvider = $taskSearchModel->search(Yii::$app->request->queryParams, (int) $id);

		return $this->render('view', [
			'model' => $this->findModel($id),
			'taskSearchModel' => $taskSearchModel,
			'taskDataProvider' => $taskDataProvider
		]);
	}

	/**
	 * Creates a new Project model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Project();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('create', [
			'model' => $model,
			'author' => ArrayHelper::map(
				User::getActiveUsers(['id', 'username'])->asArray()->all(),
				'id',
				'username'
			),
		]);
	}

	/**
	 * Updates an existing Project model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model' => $model,
			'author' => ArrayHelper::map(
				User::getActiveUsers(['id', 'username'])->asArray()->all(),
				'id',
				'username'
			),
		]);
	}

	/**
	 * Deletes an existing Project model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the Project model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Project the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		// $model = Project::find()->where(['id' => $id, 'author_id' => Yii::$app->user->id])->one;
		// if (($model !== null) {
		if (($model = Project::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}

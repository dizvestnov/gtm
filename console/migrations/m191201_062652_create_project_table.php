<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m191201_062652_create_project_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%project}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
			'user_id' => $this->integer()->notNull(),
			'project_status_id' => $this->integer()->notNull(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);
		$this->createTable('{{%project_status}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);

		$this->addForeignKey(
			'fk_project_user_id',
			'project',
			'user_id',
			'user',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_project_status_id',
			'project',
			'project_status_id',
			'project_status',
			'id',
			'CASCADE',
			'CASCADE'
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropForeignKey('fk_project_user_id', 'project');
		$this->dropForeignKey('fk_project_status_id', 'project');
		$this->dropTable('{{%project}}');
		$this->dropTable('{{%project_status}}');
	}
}

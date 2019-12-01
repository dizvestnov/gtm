<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m191201_062856_create_task_priority_status_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%task}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string(255)->notNull(),
			'description' => $this->text()->notNull(),
			'project_id' => $this->integer()->notNull(),
			'creator_id' => $this->integer()->notNull(),
			'responsible_id' => $this->integer()->notNull(),
			'performer_id' => $this->integer()->notNull(),
			'priority_id' => $this->integer()->notNull(),
			'status_id' => $this->integer()->notNull(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);
		$this->createTable('{{%task_priority}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string(255)->notNull(),
		]);
		$this->createTable('{{%task_status}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string(255)->notNull(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);
		$this->createTable('{{%comment}}', [
			'id' => $this->primaryKey(),
			'task_id' => $this->integer()->notNull(),
			'text' => $this->text()->notNull(),
		]);
		$this->createTable('{{%tag}}', [
			'id' => $this->primaryKey(),
			'task_id' => $this->integer()->notNull(),
			'tag_name' => $this->string(255)->notNull(),
		]);

		$this->addForeignKey(
			'fk_task_project_id',
			'task',
			'project_id',
			'project',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_task_creator_id',
			'task',
			'creator_id',
			'user',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_task_responsible_id',
			'task',
			'responsible_id',
			'user',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_task_performer_id',
			'task',
			'performer_id',
			'user',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_task_priority_id',
			'task',
			'priority_id',
			'task_priority',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_task_status_id',
			'task',
			'status_id',
			'task_status',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_comment_task_id',
			'comment',
			'task_id',
			'task',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->addForeignKey(
			'fk_tag_task_id',
			'tag',
			'task_id',
			'task',
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
		$this->dropForeignKey('fk_task_project_id', 'task');
		$this->dropForeignKey('fk_task_creator_id', 'task');
		$this->dropForeignKey('fk_task_responsible_id', 'task');
		$this->dropForeignKey('fk_task_performer_id', 'task');
		$this->dropForeignKey('fk_task_priority_id', 'task');
		$this->dropForeignKey('fk_task_status_id', 'task');
		$this->dropForeignKey('fk_comment_task_id', 'comment');
		$this->dropForeignKey('fk_tag_task_id', 'tag');

		$this->dropTable('{{%task}}');
		$this->dropTable('{{%task_priority}}');
		$this->dropTable('{{%task_status}}');
		$this->dropTable('{{%comment}}');
		$this->dropTable('{{%tag}}');
	}
}

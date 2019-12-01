<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%chat_log}}`.
 */
class m191201_062929_create_chat_log_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->createTable('{{%chat_log}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer(),
			'message' => $this->text()->notNull(),
			'created_at' => $this->integer(),
		]);

		$this->addForeignKey(
			'fk_chat_user_id',
			'chat_log',
			'user_id',
			'user',
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
		$this->dropForeignKey('fk_chat_user_id', 'chat_log');

		$this->dropTable('{{%chat_log}}');
	}
}

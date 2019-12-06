<?php

use yii\db\Migration;

/**
 * Class m191206_171610_rename_user_id_to_author_id_in_project_table
 */
class m191206_171610_rename_user_id_to_author_id_in_project_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{ }

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		echo "m191206_171610_rename_user_id_to_author_id_in_project_table cannot be reverted.\n";

		return false;
	}


	// Use up()/down() to run migration code without a transaction.
	public function up()
	{
		$this->renameColumn('project', 'user_id', 'author_id');
	}

	public function down()
	{
		$this->renameColumn('project', 'author_id', 'user_id');
	}
}

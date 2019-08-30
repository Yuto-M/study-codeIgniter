<?php
/**
 * newsテーブルを追加する
 * Class Migration_add_news
 */
class Migration_add_news extends CI_Migration
{
	/**
	 * migrationの実行
	 */
	public function up()
	{
		$this->dbforge->add_field([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsighned' => true,
				'auto_increment' => true,
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => '128',
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => '128',
			],
			'text' => [
				'type' => 'TEXT',
				'null' => true,
			],
		]);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('news');
	}

	/**
	 * collbackの実行
	 * newsテーブルのdrop
	 */
	public function down()
	{
		$this->dbforge->drop_table('news');
	}
}
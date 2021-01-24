<?php
use yii\db\Migration;

class m20201002_120000_create_user_table extends Migration
{
	const FILE   = 'file';
	const STATUS = 'status';

	public function safeUp()
	{
		// Create status table
		$this->createTable(self::STATUS, [
			'sta_id'         => $this->primaryKey(),
			'sta_nombre'     => $this->string(15)->notNull(),
		]);

		$this->bathInsert(self::STATUS, ['sta_nombre'], [['Inactivo'],['Activo']]);

		// Create file table
		$this->createTable(self::FILE, [
			'fil_id'         => $this->primaryKey(),
			'fil_nombre'     => $this->string(100)->notNull(),
			'fil_ruta'       => $this->string(255)->notNull(),
			'fil_fkstatus'   => $this->integer()->notNull()->default(1),
		]);
		
		$this->addForeignKey(
			'fk-file_status',
			self::FILE,
			'fil_fkstatus',
			self::STATUS,
			'sta_id',
			'CASCADE'
	  );
	}

	public function safeDown()
	{
		$this->dropTable(self::FILE);
		$this->dropTable(self::STATUS);
	}
}

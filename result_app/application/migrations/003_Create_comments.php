<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_comments extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'batch' => array(
				'type' => 'INT',
				'constraint' => 4,
			),
			'created'	=> array(
				'type'	=> 'TIMESTAMP',
			),
			'comment'	=> array(
				'type'	=> 'TEXT',
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '128'
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE
			),
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('comments');
	}

	public function down()
	{
		$this->dbforge->drop_table('comments');
	}
}
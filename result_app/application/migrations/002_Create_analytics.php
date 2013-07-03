<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_analytics extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'rollno' => array(
				'type' => 'INT',
				'constraint' => 10
			),
			'year'	=> array(
				'type'	=> 'YEAR'
			),
			'times' => array(
				'type' => 'INT',
				'constraint' => 10
			)
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('analytics');
	}

	public function down()
	{
		$this->dbforge->drop_table('analytics');
	}
}
<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('page', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'slug' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'content' => 
             array(
              'type' => 'clob',
              'notnull' => '1',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'created_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'updated_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'version' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('page_version', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'slug' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'content' => 
             array(
              'type' => 'clob',
              'notnull' => '1',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'created_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'updated_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'version' => 
             array(
              'primary' => '1',
              'type' => 'integer',
              'length' => '8',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
              1 => 'version',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('page');
        $this->dropTable('page_version');
    }
}
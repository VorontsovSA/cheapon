<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version23 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('image', 'provider_id', 'integer', '8', array(
             'notnull' => '1',
             ));
        $this->addColumn('image_version', 'provider_id', 'integer', '8', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('image', 'provider_id');
        $this->removeColumn('image_version', 'provider_id');
    }
}
<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version19 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('provider', 'phone', 'clob', '', array(
             'default' => '',
             'notnull' => '1',
             ));
        $this->changeColumn('provider_version', 'phone', 'clob', '', array(
             'default' => '',
             'notnull' => '1',
             ));
    }

    public function down()
    {

    }
}
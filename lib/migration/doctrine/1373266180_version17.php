<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version17 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('provider', 'phones', 'clob', '', array(
             ));
        $this->addColumn('provider_version', 'phones', 'clob', '', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('provider', 'phones');
        $this->removeColumn('provider_version', 'phones');
    }
}
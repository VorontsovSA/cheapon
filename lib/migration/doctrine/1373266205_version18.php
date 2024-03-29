<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version18 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->removeColumn('provider', 'phones');
        $this->removeColumn('provider_version', 'phones');
        $this->addColumn('provider', 'phone', 'clob', '', array(
             ));
        $this->addColumn('provider_version', 'phone', 'clob', '', array(
             ));
    }

    public function down()
    {
        $this->addColumn('provider', 'phones', 'clob', '', array(
             ));
        $this->addColumn('provider_version', 'phones', 'clob', '', array(
             ));
        $this->removeColumn('provider', 'phone');
        $this->removeColumn('provider_version', 'phone');
    }
}
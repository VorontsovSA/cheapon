<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version26 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('comment', 'answered_at', 'timestamp', '25', array(
             'notnull' => '',
             ));
        $this->addColumn('comment_version', 'answered_at', 'timestamp', '25', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('comment', 'answered_at');
        $this->removeColumn('comment_version', 'answered_at');
    }
}
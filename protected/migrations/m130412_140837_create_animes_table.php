<?php

class m130412_140837_create_animes_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('animes', array(
            'id'=>'pk',
            'title'=>'varchar(512) NOT NULL',
            'publisher'=>'varchar(128) NOT NULL',
            'date'=>'datetime NOT NULL',
        ));
    }

    public function down()
    {
         $this->dropTable('animes');
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
<?php

use yii\db\Migration;

/**
 * Class m220904_230736_create_backend_user
 */
class m220904_230736_create_backend_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%backend_user}}', [
            'id' =>$this->primaryKey(),
            'name' => $this->string(),
            'username' =>$this->string(),
            'password' => $this->string(),
        ]);
        
        $this->insert('{{%backend_user}}',[
            'name' => 'admin@website.com',
            'username' => 'admin@website.com',
            'password' => 'MoreandMore#789'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%backend_user}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220904_230736_create_backend_user cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'password' => $this->string()->notNull()->unique(),
        ], $tableOptions);

        $this->insert('{{%user}}',[
            'username' => ' admin@website.com',
            'email' => ' admin@website.com',
            'status' => 10,
            'password' => ' MoreandMore#789'
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}

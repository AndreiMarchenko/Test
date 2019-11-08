<?php

use yii\db\Migration;

/**
 * Class m191108_130849_create_table_subscriber
 */
class m191108_132222_create_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = 'CREATE TABLE subscriber (id INT(11) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) UNIQUE)';
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = 'DROP TABLE subscriber';
        Yii::$app->db->createCommand($sql)->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191108_130849_create_table_subscriber cannot be reverted.\n";

        return false;
    }
    */
}

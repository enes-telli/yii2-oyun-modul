<?php

use yii\db\Migration;

/**
 * Class m210116_124522_deneme
 */
class m210116_124522_deneme extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = file_get_contents(__DIR__ . '/oyuntur.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}

        $sql = file_get_contents(__DIR__ . '/oyun.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210116_124522_deneme cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_124522_deneme cannot be reverted.\n";

        return false;
    }
    */
}

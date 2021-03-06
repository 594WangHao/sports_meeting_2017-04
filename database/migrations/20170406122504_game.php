<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Game extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('game', ['engine' => 'MyISAM'])
            ->addColumn('name', 'text', ['comment' => '比赛名称'])
            ->addColumn('type', 'string', ['limit' => 20, 'comment' => '比赛类型'])
            ->addColumn('begin_time', 'datetime', ['comment' => '开始时间'])
            ->addColumn('champion', 'text', ['comment' => '冠军'])
            ->addTimestamps('create_time', 'update_time')
            ->create();
    }
}

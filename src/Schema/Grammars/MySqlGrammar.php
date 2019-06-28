<?php

namespace LittleSuperman\Database\Schema\Grammars;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\MySqlGrammar as SuperMySqlGrammar;

class MySqlGrammar extends SuperMySqlGrammar
{
    /**
     * 设置表备注
     *
     * @param Blueprint $blueprint
     * @param Fluent    $command
     * @return string
     */
    public function compileTableComment(Blueprint $blueprint, Fluent $command): string
    {
        return "alter table {$this->wrapTable($blueprint)} comment ' {$command->comment}'";
    }
}

<?php

namespace LittleSuperman\Database\Schema;

use Closure;

class Blueprint
{
    /**
     * 添加设置表备注
     *
     * @return \Closure
     */
    public function tableComment(): Closure
    {
        return function (string $comment) {
            $this->addCommand('tableComment', compact('comment'));
        };
    }
}

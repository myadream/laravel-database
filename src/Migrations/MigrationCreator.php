<?php

namespace LittleSuperman\Database\Migrations;

use Illuminate\Database\Migrations\MigrationCreator as SupportMigrationCreator;

/**
 * 重新定义
 *
 * @package LittleSuperman\Database\Migrations
 */
class MigrationCreator extends SupportMigrationCreator
{
    /**
     * Get the path to the stubs.
     *
     * @return string
     */
    public function stubPath()
    {
        return __DIR__.'/stubs';
    }
}

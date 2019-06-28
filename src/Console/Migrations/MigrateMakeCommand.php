<?php

namespace LittleSuperman\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\MigrateMakeCommand as SupportMigrateMakeCommand;
use Illuminate\Database\Migrations\MigrationCreator as SupportMigrationCreator;
use Illuminate\Support\Composer;
use LittleSuperman\Database\Migrations\MigrationCreator;

class MigrateMakeCommand extends SupportMigrateMakeCommand
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'customize:migration {name : The name of the migration}
        {--create= : The table to be created}
        {--table= : The table to migrate}
        {--path= : The location where the migration file should be created}
        {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
        {--fullpath : Output the full path of the migration}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '自定义迁移文件创建 ';

    /**
     * Create a new migration install command instance.
     *
     * @param  \Illuminate\Database\Migrations\MigrationCreator  $creator
     * @param  \Illuminate\Support\Composer  $composer
     * @return void
     */
    public function __construct(SupportMigrationCreator $creator, Composer $composer)
    {
        parent::__construct($creator, $composer);

        $this->creator = app(MigrationCreator::class);
    }
}

<?php

namespace LittleSuperman\Database\Facades;

use Illuminate\Database\MySqlConnection;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\Facade;
use LittleSuperman\Database\Schema\Grammars\MySqlGrammar;

/**
 * 扩展
 *
 * @method static \Illuminate\Database\Schema\Builder create(string $table, \Closure $callback)
 * @method static \Illuminate\Database\Schema\Builder drop(string $table)
 * @method static \Illuminate\Database\Schema\Builder dropIfExists(string $table)
 * @method static \Illuminate\Database\Schema\Builder table(string $table, \Closure $callback)
 * @method static \Illuminate\Database\Schema\Builder rename(string $from, string $to)
 * @method static void defaultStringLength(int $length)
 * @method static bool hasTable(string $table)
 * @method static bool hasColumn(string $table, string $column)
 * @method static bool hasColumns(string $table, array $columns)
 * @method static \Illuminate\Database\Schema\Builder disableForeignKeyConstraints()
 * @method static \Illuminate\Database\Schema\Builder enableForeignKeyConstraints()
 * @method static void registerCustomDoctrineType(string $class, string $name, string $type)
 *
 * @see     \Illuminate\Database\Schema\Builder
 *
 * @author  jiangao
 * @version 0.0.1
 * @package LittleSuperman\Database\Facades
 */
class SchemaExtends extends Facade
{
    /**
     * Get a schema builder instance for a connection.
     *
     * @param  string $name
     * @return \Illuminate\Database\Schema\Builder
     */
    public static function connection($name)
    {
        return static::getSchemaBuilder($name);
    }

    /**
     * Get a schema builder instance for the default connection.
     *
     * @return \Illuminate\Database\Schema\Builder
     */
    protected static function getFacadeAccessor()
    {
        return static::getSchemaBuilder();
    }

    /**
     * Get a schema builder instance for the default connection.
     *
     * @param string|null $name
     * @return \Illuminate\Database\Schema\Builder
     */
    protected static function getSchemaBuilder(string $name = null): Builder
    {
        $connection = static::$app['db']->connection($name);

        if ($connection instanceof MySqlConnection) {
            $grammar = $connection->withTablePrefix(new MySqlGrammar());
            $connection->setSchemaGrammar($grammar);
        }

        return $connection->getSchemaBuilder();
    }
}

# 重写laravel database 部分代码


## 1. 扩展迁移表备注
### 安装
```shell
composer require little-superman/laravel-database
```

### 命令行
```shell
php artisan customize:migration 表名称
```

### 使用
```php
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use LittleSuperman\Database\Facades\SchemaExtends;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SchemaExtends::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->tableComment('表备注');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
```


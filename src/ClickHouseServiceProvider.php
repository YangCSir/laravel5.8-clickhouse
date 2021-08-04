<?php

declare(strict_types=1);

namespace YangCSir\LaravelClickHouse;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\DatabaseManager;
use YangCSir\LaravelClickHouse\Database\Connection;
use YangCSir\LaravelClickHouse\Database\Eloquent\Model;

class ClickHouseServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /** @var DatabaseManager $db */
        $db = $this->app->get('db');

        $db->extend('clickhouse', function ($config, $name) {
            $config['name'] = $name;

            return new Connection($config);
        });

        Model::setConnectionResolver($db);
    }
}

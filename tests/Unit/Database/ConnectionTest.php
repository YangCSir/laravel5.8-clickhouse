<?php

declare(strict_types=1);

namespace YangCSir\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use YangCSir\LaravelClickHouse\Database\Connection;
use YangCSir\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}

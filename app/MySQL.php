<?php

namespace App;

class MySQL implements Database
{
    private const VERSION = '12';

    public function __construct(
        private string $name
    )
    {
        print_r($this->name);
        echo PHP_EOL;
    }

    public function connect(): void
    {
        print 'Connected to MySQL';
        print PHP_EOL;
    }

    public function disconnect()
    {
        print 'Disconnect from MySQL';
        print PHP_EOL;
    }

    public function status(): int
    {
        print 'Status: connected';
        print PHP_EOL;

        return -1;
    }
}
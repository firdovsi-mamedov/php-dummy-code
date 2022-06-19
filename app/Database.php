<?php

namespace App;

interface Database
{
    public function connect();

    public function status();

    public function disconnect();
}
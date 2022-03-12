<?php

use PHPUnit\Framework\TestCase;

class DatabaseModelTest extends TestCase{
    public function test_Database_Connection(){
        $this->assertFalse(null, DatabaseModel::connect());
    }
}
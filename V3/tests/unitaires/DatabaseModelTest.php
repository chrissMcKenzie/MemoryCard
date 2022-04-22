<?php

use Chrissmckenzie\Model\DatabaseModel;
use PHPUnit\Framework\TestCase;

class DatabaseModelTest extends TestCase {
    public function test_Database_Connection() {
        $excepted = null;
        $resultat = DatabaseModel::connect();
        $this->assertTrue($excepted, $resultat);
    }
}

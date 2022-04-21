<?php 

use PHPUnit\Framework\TestCase;

class getPatientFromDBTest extends TestCase{
    public function test_getPatientFromDb(){
        $excepted = [];
        $resultat = new \ManagePatient; $resultat->getPatientFromDB();
        $this->assertEquals($excepted, $resultat);
    }
}
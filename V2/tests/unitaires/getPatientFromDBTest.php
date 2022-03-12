<?php 

use PHPUnit\Framework\TestCase;

class getPatientFromDBTest extends TestCase{
    public function test_getPatientFromDB(){
        $excepted = Patient::class;
        $resultat = new ManagerPatient(); $resultat->getPatientFromDB();
        $this->assertEquals($excepted, $resultat);
    }
}
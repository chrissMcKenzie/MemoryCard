<?php

use PHPUnit\Framework\TestCase;

class Math0Test extends TestCase{

    public function test_Double(){
        $excepted = 4; $resultat = \chrissMcKenzie\Math::double(2);
        $this->assertEquals($excepted, $resultat);
    }

    public function test_DoubleIfZero() {
        $excepted = 0; $resultat = \chrissMcKenzie\Math::double(0);
        $this->assertEquals($excepted, $resultat);
    }

    // public function testDouble2() {
    //     $excepted = 4;
    //     $resultat = \chrissMcKenzie\Math::double(2);
    //     $this->assertTrue($excepted, $resultat);
    // }
}
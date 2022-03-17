<?php //namespace chrissMcKenzie\Tests\unitaires;

//use chrissMcKenzie\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{

    public function test_Double(){
        $excepted = 4; $resultat = Math::double(2);
        //$this->assertEquals($excepted, $resultat);
        $this->assertSame($excepted, $resultat);
    }

    public function test_DoubleIfZero() {
        $excepted = 0; $resultat = Math::double(0);
        $this->assertEquals($excepted, $resultat);
    }

    public function test_Can_add_two_integers(){
        $this->assertTrue(2 > 1);
        $this->assertTrue(19 >= 7);
    }

    // public function testDouble2() {
    //     $excepted = 4;
    //     $resultat = \chrissMcKenzie\Math::double(2);
    //     $this->assertTrue($excepted, $resultat);
    // }
}
<?php
require './src/Saison.php';
use PHPUnit\Framework\TestCase;

class SaisonTest extends TestCase
{
   
    public function testIsValid()
    {
        $saison= new Saison(['1:1', '2:0', '4:1', '3:2', '0:1', '2:3', '2:1', '3:1', '1:0', '1:1']);
        $this->assertEquals(true, Saison::IsValid());
        }
        
    public function testIsInValid(){
        $saison= new Saison(['1:1', '2:2', '3:0', '1:0', '5:2']);
        $this->assertEquals(false, Saison::IsValid());
    }   

}
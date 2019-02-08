<?php
require './src/Saison.php';
use PHPUnit\Framework\TestCase;

class SaisonTest extends TestCase
{
   
    public function testIsValid()
    {
        $this->assertEquals(true, Saison::IsValid(10));
        }
    

}
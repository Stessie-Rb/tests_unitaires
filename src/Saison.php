<?php
use Symfony\Component\Yaml\yaml;

/*class KercodeScore
{

    public static function Score($hero, $adversaire )
    {
        if ($hero > $adversaire) {
            $content = Yaml::parse(file_get_contents(data.json));

        } else if ($hero === $adversaire){
         
            $content = Yaml::parse(file_get_contents(data.json));
        }

        else ($hero < $adversaire) {
            $content = Yaml::parse(file_get_contents(data.json));
        
        }
    }
}*/
   class Saison
   {
       public static function IsValid($number)
       {
           if ($number <= 10) {
               return true;
           } else {
               return false;
           }
       }
   }
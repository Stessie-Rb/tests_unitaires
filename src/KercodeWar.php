<?php

use Symfony\Component\Yaml\Yaml;

class KercodeWar {
    

    public static function weekday($number, $lang='en')
    {
      if ($lang === 'fr') {
          $content = Yaml::parse(file_get_contents("fr.yml"));
      }
      else{
          $content = Yaml::parse(file_get_contents("en.yml"));
      }
      if($number >= 1 && $number <= 7){
          return $content['weekdays']['days'][$number -1];
      }
      else{
         return $content['weekdays']['error'];
      }
      eval(\Psy\sh());
       /* if ($number >= 1 && $number <= 7) {

          switch ($number) {
            case 1:
              return 'Dimanche';
              break;
            case 2:
              return 'Lundi';
              break;
            case 3:
              return 'Mardi';
              break;
            case 4:
              return 'Mercredi';
              break;
            case 5:
              return 'Jeudi';
              break;
            case 6:
              return 'Vendredi';
              break;
            case 7:
              return 'Samedi';
              break;
          }
        } 
        else {
          return 'Oups... Vous devez entrer un nombre compris entre 1 et 7';
        }
      } else {
        if ($number >= 1 && $number <= 7) {
          switch ($number) {
            case 1:
              return 'Sunday';
              break;
            case 2:
              return 'Monday';
              break;
            case 3:
              return 'Tuesday';
              break;
            case 4:
              return 'Wednesday';
              break;
            case 5:
              return 'Thursday';
              break;
            case 6:
              return 'Friday';
              break;
            case 7:
              return 'Saturday';
              break;
          }
        } else {
          return 'Wrong, please enter a number between 1 and 7';
        }
      }*/
    }
  
    public static function isWeekend($number){
        if($number=== 1 || $number===7){
            return true;
        }
        else{
            return false;
        }
    }
}
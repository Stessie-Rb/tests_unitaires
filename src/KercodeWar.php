<?php
class KercodeWar{
    public static function weekday($number){

            if ($number === 1) {
                return 'Sunday';
            }

            elseif ($number === 2) {
                return 'Monday';
            } 
            
            elseif ($number === 3) {
                return 'Tuesday';
            } 
            
            elseif ($number === 4) {
                return 'Wednesday';
            } 
            
            elseif ($number === 5) {
                return 'Thursday';
            } 
            
            elseif ($number ===6) {
                return 'Friday';
            } 
            
            elseif ($number === 7) {
                return 'Saturday';
            } 
            
            else {
                return 'Wrong, please enter a number between 1 and 7';
        }
    }
}
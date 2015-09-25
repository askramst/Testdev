<?php

Print Greetings(1300 , "True");


function Greetings($hour, $test = '') {
    $hours = (int) $hours;
    
        if ($hour >= 0000 && $hour < 1200){
           if($test = 'True'){
           return "<h>" .'Good Morning' . "</h>"; }
           else{
               return "Good Morning";
           }
    }
    if ($hour >= 1200 && $hour < 1700) {
         if($test = 'True'){
           return "<h>" .'Good Afernoon' . "</h>"; }
           else{
               return "Good Afternoon";
           }
    }
    
    if ($hour > 1700) {
         if($test = 'True'){
           return "<h>" .'Good Evening' . "</h>"; }
           else{
               return "Good Evening"; }
    }
}

?>


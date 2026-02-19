<?php 
namespace core;

class Validator{

    public static function string($value, $min=1, $max = INF){
        $value= trim($value);
        return strlen($value)>= $min && strlen($value)<= $max;
    }

    public static function email($value){
return filter_var($value, FILTER_VALIDATE_EMAIL);
    }


    // public static function reg($value){
    //     return filter_input ( INPUT_POST, $value, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //         }
    
            
    //  public static function INT($value){
    //             return filter_input (INPUT_POST, $value,  FILTER_SANITIZE_NUMBER_INT);
    //   }

    public static function greaterThan( int $value, int $greaterThan):bool{
        return $value > $greaterThan;
    }
}

<?php
function error_h($errno, $errstr, $errfile, $errline){
    if(!(error_reporting()&$errno)){
        return;
    }
    switch($errno){
        case E_USER_ERROR:
            echo "[$errno] $errstr\n";
            echo "1on line $errline in file $errfile\n";
            break;
        case E_USER_WARNING:
            echo "[$errno] $errstr";
            echo "2on line $errline in file $errfile\n";
            break;
        case E_USER_NOTICE:
            echo "[$errno] $errstr";
            echo "3on line $errline in file $errfile\n";
            break;
        default:
            echo "[$errno] $errstr";
            echo "4on line $errline in file $errfile\n";
    }
    return true;
}
function assertt($s)
{
    if($s){
        
    }else{
        trigger_error("ass wrong");
    }
}

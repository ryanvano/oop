<?php

//for ($i=0 ; $i <10 ; $i++){
//    echo "$i <br>";
//    ob_flush();
//    flush();
//    sleep(1);
//}

class Number{
    public function __construct(){
        $this->number = rand(1,10);
        echo $this->number;
        echo "<br>";
        ob_flush();
        flush();
        sleep(2);
        unset($this);
        
        
    }
    public function __destruct(){
        $val = new Number;
    }
    
}


$val = new Number;

?>
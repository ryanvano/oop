<?php

class baddie{
    public $evilness = 10;
    public $name;
    public static $level = 1;
    
    public function __construct($evilness, $name){
        $this->evilness = $evilness;
        $this->name = $name;
        echo "A " .__CLASS__." has been created with evilness of " .$this->evilness. " and a name of " . $this->name . "<br>";
    }
    
    public function __destruct(){
        echo "<br>" . $this->name ." has been destroyed";
    }
    
    public function __toString(){
        return "This baddie is " . $this->name . "<br>";
    }
    
    public function changeEvil($evilLevel){
        $this->evilness = $evilLevel;
        return $this->evilness;
    }
    
    public function getEvilness(){
        echo $this->evilness;
    }
    public function getName(){
        echo $this->name;
    }
    
    public function levelUp(){
        ++baddie::$level;
    }
    
}

class boss extends baddie {
    public $evilness = 50;
    
    public function __destruct(){
        echo "you beat the boss";
    }
    
    public function __construct(){
        echo "A " .__CLASS__." has been created for youwith evilness of " .$this->evilness. " and a name of " . $this->name . "<br>";
    }
}


$v1 = new boss(10, "sgteve");
var_dump($v1);
$v1->getEvilness();
$v1->getName();
echo "<br> <br> <br>";
echo baddie::$level;
$v1->levelUp();
echo "<br> <br> <br>";
echo baddie::$level;




?>
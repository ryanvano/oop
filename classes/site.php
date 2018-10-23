<?php 

class site {
    private $header;
    private $footer;
    
    public function addHeader($header){
        $this->header = $header;
    }
    
    public function addFooter($footer){
        $this->footer = $footer;
    }
    
    public function displayHeader($title){
        include "includes/" . $this->header;
    }
    public function displayFooter(){
        include "includes/" . $this->footer;
    }
    
}


?>
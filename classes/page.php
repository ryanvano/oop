<?php 

class page {
    
    public function display($title, $content){
        global $site;
        $site->displayHeader($title);
        echo $content;
        $site->displayFooter();
    }
    
}


?>
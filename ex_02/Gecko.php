<?php
class Gecko {
    public $name;
    
    public function __construct($name = null) 
    { 
        if($name!==null)
        
        {
            $this -> name = $name;
            echo "Hello $name ! \n";
        }
        
         else {echo 'Hello !' . PHP_EOL;}
    }

}

/*new Gecko();

new Gecko("toto");*/

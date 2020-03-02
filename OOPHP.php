<html>
  <head><title>OOPHP</title></head>
    <body> 
<?php
Class animal {
    protected $name;
    protected $favourite_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;

     const PI = "3.14159";

     function getName(){
         return $this->name;
     }
    fucntion __construct(){
        $this->id = rand (1oo, 1000000);
        echo $this->id . " has been assigned 
        animal::$number_of_animals++;
    }
    public function getName(){
        echo $this->name . " is being destroy"y
    }
    function __get($name){
        echo "asked for " . $name . " <br/>"
        return $this->$name; 
    }
    function __set ($set)
}
?>

   </body>
</html> 
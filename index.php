<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        interface Bird
{
    public function layEgg();
}

class Chicken implements Bird
{
    public function layEgg()
    {
        // A new egg will always hatch a new Chicken
        return new Egg(new Chicken());
    }
}

class Egg
{
    private $hatchCount = 0;
    private $bird;

    public function __construct($bird)
    {
        $this->bird = $bird;
    }

    public function hatch()
    {
        if($this->hatchCount > 0) {
            throw new Exception('The egg already hatched');
        }
        
        $this->hatchCount++;
        return $this->bird;
    }
}

$chickenOne = new Chicken();
$eggOne = $chickenOne->layEgg();

// you get another new checken when eggOne hachted
$chickenTwo = $eggOne->hatch();
echo "The eggOne from chickenOne hatched & new chickenTwo has borned\n";

// new chicken can lay another egg
$eggTwo = $chickenTwo->layEgg();
$chickenThree = $eggTwo->hatch();

echo "The eggTwo from chickenTwo hatched & new chickenThree has borned\n";
echo "Hatching again will cause an exception\n";

$eggTwo->hatch(); // with throw exception
        ?>
    </body>
</html>

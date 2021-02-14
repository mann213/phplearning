<?php
interface Bird{
    public function layEgg();
}
class Hen implements Bird{
    public function layEgg(){
        $egg = new Egg(new Hen());
        return $egg;
    }
}
class Egg{
    private $hatchcount = 0;
    private $bird;
    public function __construct($bird){
        $this->bird = $bird;
    }
    public function hatch(){
       if($this->hatchcount > 0){
          throw new Exception("Egg already hatched!");
       } 
       $this->hatchcount++;
        
    return $this->bird;
    }
}
$hen1 = new Hen();
$egg1 = $hen1->layEgg();

$hen2 = $egg1->hatch();
echo "Egg hatched to new hen<br>";


$hen3 = $egg1->hatch();
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


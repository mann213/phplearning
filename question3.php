<?php

for ($i=1;$i<=5;$i++){
    for ($j=1;$j<=$i;$j++)
    {
    print "*";
        }
        
         
    print "0";
    
    print "<br>";
}
//1,3,6,10,15
//1,2,3,4,5
//
$k=0;
for ($i=1;$i<=5;$i++){
    $k = $i+$k;
   for ($j=1;$j<=$k;$j++)
   {
    print "*";
    
   }
   for($k=1;$k<=$i;$k++){     
         
    print "0";
   }
    print "<br>";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


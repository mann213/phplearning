
<html>
    <head>
    </head><!-- comment -->
    <body>
        <table border='1px' width='270px'>
        <?php

$arr = array(1,2,3,4,5,6,7,8,9,10);
function multiplication($i){
    print "<tr>";
    for($j=1;$j<=10;$j++)
    {
        print ("<td>".$i * $j."</td>");
    }
    print "</tr>";
}
foreach($arr as $i){
    multiplication($i);
}
?>
        </table>
        </body>
</html>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


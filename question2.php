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
        <table   width='400px' height='400px' border='1px'>
        <?php
        
        for($j=1;$j<=10;$j++){
            print "<tr>";
        for($i=1;$i<=10;$i++){
            if($j%2!=0){
            if(($i%2)== 0){
            print "<td width='20px' style='background-color: black' height='20px' ></td>";
            }else{
                 print "<td width='20px' height='20px'></td>";
            }
            }else{
                if(($i%2)== 0){
            print "<td width='20px'  height='20px' ></td>";
            }else{
                 print "<td width='20px' style='background-color: black' height='20px'></td>";
            }  
            }
        }
        print "</tr>";
        }
        // put your code here
        ?>
        </table>
    </body>
</html>

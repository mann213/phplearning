<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>factor</title>
    </head>
    <body>
        <form id="form1" method="post">
            Number:<input name="num" form="form1" type="text" />
            <input type="submit" name="sub" form="form1">
        </form>
        <?php
        // put your code here
        $arr = array();
        if(isset($_POST['sub'])){
            $num = $_POST['num'];
            echo $num."<br>";
            
            for($i=1;$i<=$num;$i++){
                if($num%$i == 0){
                    $arr[$i] = $i;
                    print $i."<br>";
                }
                
            }
        }
        ?>
    </body>
</html>

<?php
    if (!isset($_COOKIE["visitis"])) {
        $visitis =1;
        
    }else if(!isset($_COOKIE["user"])){
        $visitis =$_COOKIE["visitis"]+1;

    }else{
        $visitis =$_COOKIE["visitis"];

    }
    setcookie("visitis",$visitis,time()+35);

    setcookie("user","Ilyés Bori",time()+5);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.Bori</title>
</head>
<body>
    <main>
        <?php
        if (isset ($_COOKIE["user"])&& isset ($_COOKIE["visitis"])) {

            echo "Üdvözöllek kedves ".$_COOKIE["user"]."!<br>";
            echo"Ez a ".$_COOKIE["visitis"].". látogatásod. ";
        }
        else {
            echo"Üdvözöllek kedves vendég!";
        }

        ?>
    </main>
    
</body>
</html>
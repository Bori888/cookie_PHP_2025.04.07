<?php
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
        if (issert ($_COOKIE["user"])) {
            echo "Üdvözöllek kedves ".$_COOKIE["user"]."!";
        }
        else {
            echo"Üdvözöllek kedves vendég!";
        }

        ?>
    </main>
    
</body>
</html>
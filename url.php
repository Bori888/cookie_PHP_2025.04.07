<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["szamlalo"])&& preg_match("/^\d+$/",$_GET["szamlalo"])) {
            $szamlalo = (int)$_GET["szamlalo"];
            
        }else{
            $szamlalo= 0;
            

        }
        echo "$szamlalo";
        $szamlalo++;
    ?>
<a href="url.php?szamlalo=<?php echo $szamlalo?>">Növel</a>
    
</body>
</html>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
        $szamlalo = 0;
        if (isset($_POST["szamlalo"])) {
            $szamlalo =$_POST["szamlalo"];
            
        }
        echo $szamlalo+1;
        $szamlalo++;
        
        ?>
        <form method = "post">
            <input type="text" name="szamlalo" value="<?php echo $szamlalo?>">
            <input type="submit" value="Növel">
        </form>
    </main>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label for="mes">Message</label>
        <textarea name="mes" id="mes" rows="6" cols="50" required></textarea>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $mes=$_POST["mes"];
            $file='s2.txt';
            file_put_contents($file,$mes);
            $m=file_get_contents($file);
            echo "<p>Message:$m</p>";
        }
    
    ?>
</body>
</html>
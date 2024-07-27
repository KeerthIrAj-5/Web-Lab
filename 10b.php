<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label for="num">Enter a number</label><br><br>
        <input type="number" id="num" name="num" required><br><br>
        <input type="submit" value="check">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num=$_POST['num'];
            if(isprime($num)){
                echo "$num is prime";
            }
            else{
                echo "$num is not prime";
            }
            
        }
        function isprime($num){
            if($num<=1)return False;
            for($i=2;$i<=sqrt($num);$i++){
                if($num%$i==0)return False;
            }
            return True;
        }
    ?>
</body>
</html>
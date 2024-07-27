<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="user">Username</label><br><br>
        <input type="text" id="user" name="user"><br><br>
        <label for="pass">Password</label><br><br>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $u=$_POST['user'];
            $p=$_POST['pass'];
            $file='login.txt';
            if(file_exists($file)){
                $users=file($file,FILE_IGNORE_NEW_LINES);
                $login=False;
                foreach($users as $user){
                    list($su,$sp)=explode(',',$user);
                    if($su==$u&&$sp==$p){
                        $login=True;
                        break;
                    }
                }
                if($login){
                    echo "<h2>Welcome $u</h2>";
                }
                else{
                    echo "Invalid username or password";
                }
            }
        }
    
    ?>
</body>
</html>
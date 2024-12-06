<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

if(isset($_POST['ID']) && !empty($_POST['ID'])){
    $cookie_id=$_POST['ID'];
    setcookie('ID',$cookie_id);
    }
    
    if(isset($_POST['MDP']) && !empty($_POST['MDP'])){
        $cookie_pw=$_POST['MDP'];
        setcookie('MDP',$cookie_pw);
        }
    
    
    
    if(isset($_COOKIE['ID'])&& !empty($_COOKIE['ID'])) {
        echo "user is" ." " . $_COOKIE['ID'];
    } else {
        echo "Cookies are not set";
    }
    echo "<br>";
    
    if(isset($_COOKIE['MDP'])&& !empty($_COOKIE['MDP'])) {
        echo "psw is" . " " . $_COOKIE['MDP'];
    } else {
        echo "Cookies are not set";
    }


?>


<a href="./changerCookie.php">Changer les données</a>



    
</body>
</html>
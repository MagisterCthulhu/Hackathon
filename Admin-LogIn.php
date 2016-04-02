<?php
    include ("DB.php");
    $q = new DB();
    if(isset($_POST['name']) && (isset ($_POST['password'])))
    {
        /*foreach($q->Login as $name => $password)
        {
            //print $name . '' . $password;
            if($data == password)
            {

            }
        }*/

        if(array_key_exists($_POST['name'], $q->Login)){
            if($q->Login[$_POST['name']] == $_POST['password']){
                echo 'enter';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <p align="center">LogIn</p>
<form method="post" align="center">
    <p>Name:<input type="text" name = "name" size = "40"></p>
    <p>Password:<input type="password" name = "password"></p>
    <p><input type="submit" value="Enter"></p>
</form>
</body>
</html>
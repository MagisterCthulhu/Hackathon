<?php
    if(isset($_POST['Add New']))
    {
        header ('Location: Administration.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p align="center">Administration</p>
<form method="post">
    <p><input type="submit" value="Add New"/></p>
    <p><input type="submit" value="Delete Item"/></p>
    <p><input type="submit" value="Change Item"/></p>
</form>

</body>
</html>
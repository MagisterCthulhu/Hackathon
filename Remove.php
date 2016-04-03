<?php
include("DB.php");
session_start();
$q = new DB();
$r = (int)$_GET['id'];
if(!empty($_SESSION['name']))
{
    $s = $q->SelectID($r);
        $_name = $s['name'];
        $_date = $s['date'];


    if(isset($_POST['delete']) )
    {
        $q->Delete($r);
        header ('Location: Administration.php');
        exit();
    }

}
else{
    header ('Location: Admin-LogIn.php');
    exit();
}
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style type="text/css">body{padding-top:40px;padding-bottom:40px;background-color:#f5f5f5;}.form-signin{max-width:600px;padding:19px 29px 29px;margin:0 auto 20px;background-color:#fff;border:1px solid #e5e5e5;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);box-shadow:0 1px 2px rgba(0,0,0,.05);}.form-signin .form-signin-heading,.form-signin .checkbox{margin-bottom:10px;}.form-signin input[type="text"],.form-signin input[type="password"]{font-size:16px;height:auto;margin-bottom:15px;padding:7px 9px;}</style>
</head>
<body>
<h1 align="center">Удаление события</h1>

<div class="container">
    <form method="post" align="center" class="form-signin">
        <form role="form">

            <div class="form-group">
                <label for="usr"></label>
                <input type="text" name="delete" class="form-control"  placeholder="*Обязательное поля для заполнения" value="<?php  echo $_name.' '.$_date; ?>">
            </div>

            <button type="submit" class="btn btn-default">Удалить</button>
        </form>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
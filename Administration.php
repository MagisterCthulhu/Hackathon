<?php
session_start();
include("DB.php");
if(!empty($_SESSION['name'])) {
    $q = new DB();
    $q = $q->SelectAll();


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
</head>
<body>
<h1 align="center">Administration</h1>
<div class="col-lg-2">
    <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
            <li><a href="Add.php"><i class="icon-chevron-right"></i>Add new item to timeline</a></li>
            <li><a href="index.php"><i class="icon-chevron-right"></i>Log out</a></li>

        </ul>
    </div>
</div>
<div class="col-lg-10">
    <div class="col-lg-6">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>date</th>
            <th>Change</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach($q as $row)
            {
                echo "<tr>";
                echo "<td  class=\"col-md-1\">".$row['id']."</td>>";
                echo "<td class=\"col-md-1\">".$row['name']."</td>>";
                echo "<td class=\"col-md-1\">".$row['date']."</td>>";
                echo '<td class=\"col-md-1\"><a href="Update.php?id='.$row['id'].'"><button type="submit" class="btn btn-default" name="Update" ] >Update</button></a></td>';
                echo '<td class=\"col-md-1\"><a href="Remove.php?id='.$row['id'].'"><button type="submit" class="btn btn-default" name="Delete">Delete</button></a></td>';

                echo "</tr>";
            }

        ?>
        </tbody>
    </table>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>




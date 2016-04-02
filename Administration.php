<?php
session_start();
include("DB.php");
if(!empty($_SESSION['name'])) {
    if (isset($_POST['Add New'])) {
        header('Location: Add.php');
        exit();
    }
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
            <li><a href="#buttonGroups"><i class="icon-chevron-right"></i>Change item</a></li>
            <li><a href="#buttonDropdowns"><i class="icon-chevron-right"></i>Delete item</a></li>
            <li><a href="#navs"><i class="icon-chevron-right"></i>Log out</a></li>

        </ul>
    </div>
</div>
<div class="col-lg-10">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>text</th>
            <th>videosrc</th>
            <th>background</th>
            <th>pic1</th>
            <th>pic2</th>
            <th>pic3</th>
            <th>pic4</th>
            <th>date</th>
            <th>Change</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach($q as $row)
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>>";
                echo "<td>".$row['name']."</td>>";
                echo "<td>".$row['text']."</td>>";
                echo "<td>".$row['videosrc']."</td>>";
                echo "<td>".$row['picbackground']."</td>>";
                echo "<td>".$row['pic1']."</td>>";
                echo "<td>".$row['pic2']."</td>>";
                echo "<td>".$row['pic3']."</td>>";
                echo "<td>".$row['pic4']."</td>>";
                echo "<td>".$row['date']."</td>>";
                echo '<td><button type="submit" class="btn btn-default">Update</button></td>';
                echo "</tr>";
            }

        ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
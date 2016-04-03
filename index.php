<?php
    include("DB.php");
    $q= new DB();
    $data= $q->SelectAllOrdered();
?>

<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" type="text/css" href="style_2.css">
    <script type="text/javascript" src="js.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
</head>
<body>
<div class="wrapper">
    <input type="radio" name="point" id="slide1" checked>
    <input type="radio" name="point" id="slide2">
    <input type="radio" name="point" id="slide3">
    <input type="radio" name="point" id="slide4">
    <div class="slider">
        <div class="slides slide1"><img src="images/maxresdefault.jpg"></div>
        <div class="slides slide2"><img src="images/1.jpg"></div>
        <div class="slides slide3"><img src="images/2.jpg"></div>
        <div class="slides slide4"><iframe src="https://www.youtube.com/embed/y0SRvr93nuU" frameborder="0" allowfullscreen></iframe><!--<img src="images/3.jpg">--></img></div>
    </div>
    <div class="controls">
        <label for="slide1"><img class="mini" src="images/maxresdefault.jpg"></label>
        <label for="slide2"><img class="mini" src="images/1.jpg"></label>
        <label for="slide3"><img class="mini" src="images/2.jpg"></label>
        <label for="slide4"><img class="mini" src="images/youtube-1.png"></label>
    </div>
</div>
<div class="upper" onclick="goOut()">
    <div class="shadow"></div>
    <div class="header" onselectstart="return false" onmousedown="return false">BIG BANG</div>
</div>
<div class="arrowBack" onclick="getOverHere()"></div>
<div class="timeline">
    <ul id="timeline">
        <?php
        $first = 0;
        foreach($data as $row)
        {
            if($first ==0)
        {
                echo "<li id =".$row['id'].">";
                echo "<div class=\"item selected\" onclick = \"selectItem(this);getContent(this);\" ></div>";
                echo "<div class=\"dateBlock\" >" . $row['date']."</div >";
                echo "</li >";
                $first = 1;
        }
            else{
            echo "<li id =" . $row['id'] . ">";
            echo "<div class=\"item\" onclick = \"selectItem(this);getContent(this);\" ></div>";
            echo "<div class=\"dateBlock\" >" . $row['date'] . "</div >";
            echo "</li >";
        }
        }
        ?>
    </ul>
    <div class="clearout"></div>
</div>
<div class="text_box">
    <p><?php
    foreach($data as $row)
    {
        $d = new DB();
        $d = $d->GetText(2);
        echo $d;
    }
    ?></p>
</div>
<div class="footer"><!--ПОДВАЛ-->
    <a href="Admin-LogIn.php"><img src="images/lock.png" class="lock"></a>
</div>
<script type="text/javascript">
    $(window).load(function() {
        $("#timeline").flexisel({
            enableResponsiveBreakpoints: true,
            visibleItems: 5,
            clone:false
        })
    });

    function getContent(){
        $.ajax({
            url: 'ajax/getData.php?id=' + getIdSelection(),
            success: function(data){
                var data = JSON.parse(data);
            }
        });
    }
</script>
</body>
</html>
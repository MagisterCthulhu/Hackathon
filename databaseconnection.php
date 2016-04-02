<?php
include("DB.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
<div class="info_block"><!-- Блок с информацией о данной дате -->
    <div class="img-video_row"><!--Колонка для картинок и видео -->
        <div class="button_angle_up"><img src="images/angle-up.png"></div>
        <img src="<?php $q = new DB(); $q->GetPicture1(4);?>">
        <img src="images/img.jpg"><!--СЮДА КАРТИНКИ И ВИДЕО ДЛЯ БЛОКА С ИНФОРМАЦИЕЙ О СОБЫТИЕ -->
        <div class="button_angle_down"><img src="images/angle-down.png"></div>
    </div>
    <div class="text_row"><!--Колонка с текстом -->
        <h1><!--Заголовок текста(название события)-->
            <?php
            $q = new DB();
            $q->GetHead(4);
            ?>

        </h1>
        <?php
       // include("index.html");
        ?>
        <p><!--Информация(текст) о событие-->
            <?php
                $q = new DB();
                $q->GetText(4);
            ?>
        </p>
    </div>
</div>
</body>
</html>
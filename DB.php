<?php

class DB {
    function  GetHead($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT name FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['name'] . "\t";
        }
    }
    function  GetText($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT text FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['text'] . "\t";
        }
    }
    function  GetVideo($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT videosrc FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['videosrc'] . "\t";
        }
    }
    function  GetBackground($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT picbackground FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['picbackground'] . "\t";
        }
    }
    function  GetPicture1($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT pic1 FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['pic1'] . "\t";
        }
    }
    function  GetPicture2($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT pic2 FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['pic2'] . "\t";
        }
    }
    function  GetPicture3($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT pic3 FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['pic3'] . "\t";
        }
    }
    function  GetPicture4($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $str = $pdo->query("SELECT pic4 FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['pic4'] . "\t";
        }
    }
    function  PutData($name,$text,$videosrc,$pic1,$pic2,$pic3,$pic4)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);
        $pdo->query("INSERT INTO content(name,text,videosrc,pic1,pic2,pic3,pic4) VALUES( " );
    }
}
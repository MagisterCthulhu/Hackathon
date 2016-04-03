<?php

class DB {
 public $Login = array(
     "admin" => "123456",
     "root" => "123456",
 );


    function  GetHead($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
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
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
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
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $str = $pdo->query("SELECT videosrc FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['videosrc'] . "\t";
        }
    }
    function  GetPicture1($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
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
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
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
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $str = $pdo->query("SELECT pic3 FROM content WHERE id = ".$id);
        foreach ($str as $row)
        {
            print $row['pic3'] . "\t";
        }
    }

    function PutData($name,$text,$videosrc,$pic1,$pic2,$pic3,$date)
    {
        $name = "'".$name."'";
        $text = "'".$text."'";
        $videosrc = "'".$videosrc."'";
        $pic1 = "'".$pic1."'";
        $pic2 = "'".$pic2."'";
        $pic3 = "'".$pic3."'";

        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $pdo->exec("set names utf8");
        $st = "INSERT INTO content(name,text,videosrc,pic1,pic2,pic3,date) VALUES( ".$name.",".$text.",".$videosrc.",".$pic1.",".$pic2.",".$pic3.", ".$date.")";
        //print_r($st);
        $pdo->query($st);
    }
    function SelectAll()
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $str = $pdo->query("SELECT * FROM content");
        return $str;
    }
    function SelectAllOrdered()
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $str = $pdo->query("SELECT * FROM content ORDER BY date ASC");
        return $str;
    }
    function Delete($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $str = $pdo->query("DELETE FROM content WHERE id =".$id);
    }
    function SelectID($id)
    {
        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $str = $pdo->query("SELECT * FROM content WHERE id =".$id );

        $data = array();

        foreach($str as $row){
            $data =  $row;
        }
        return $data;
    }
    function Update($name,$text,$videosrc,$pic1,$pic2,$pic3,$date,$id)
    {
        $name = "'".$name."'";
        $text = "'".$text."'";
        $videosrc = "'".$videosrc."'";
        $pic1 = "'".$pic1."'";
        $pic2 = "'".$pic2."'";
        $pic3 = "'".$pic3."'";

        $dsn = 'mysql:host=localhost;dbname=tuniverse';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn,$user,$password);$pdo->exec("set names utf8");
        $pdo->query("UPDATE content SET name =".$name.", text = ".$text. ", videosrc = ".$videosrc.", pic1 =".$pic1. ", pic2 = ".$pic2.", pic3 = ".$pic3. ", date =".$date."  WHERE content.id =".$id );
    }
}
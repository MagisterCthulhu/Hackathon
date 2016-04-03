<?php

class DB
{
    public $Login = array(
        "admin" => "123456",
        "root" => "123456",
    );
    public $dsn = 'mysql:host=localhost;dbname=tuniverse';
    public $user = 'root';
    public $password = '';

    function PutData($name, $text, $videosrc, $pic1, $pic2, $pic3, $date)
    {
        $name = "'" . $name . "'";
        $text = "'" . $text . "'";
        $videosrc = "'" . $videosrc . "'";
        $pic1 = "'" . $pic1 . "'";
        $pic2 = "'" . $pic2 . "'";
        $pic3 = "'" . $pic3 . "'";
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->exec("set names utf8");
        $pdo->query("INSERT INTO content(name,text,videosrc,pic1,pic2,pic3,date) VALUES( " . $name . "," . $text . "," . $videosrc . "," . $pic1 . "," . $pic2 . "," . $pic3 . ", " . $date . ")");
    }
    function SelectAll()
    {
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->exec("set names utf8");
        $str = $pdo->query("SELECT * FROM content");
        return $str;
    }
    function SelectAllOrdered()
    {
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->exec("set names utf8");
        $str = $pdo->query("SELECT * FROM content ORDER BY date ASC");
        return $str;
    }
    function Delete($id)
    {
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->exec("set names utf8");
        $str = $pdo->query("DELETE FROM content WHERE id =" . $id);
    }
    function SelectID($id)
    {
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->exec("set names utf8");
        $str = $pdo->query("SELECT * FROM content WHERE id =" . $id);
        $data = array();
        foreach ($str as $row)
        {
            $data = $row;
        }
        return $data;
    }
    function Update($name, $text, $videosrc, $pic1, $pic2, $pic3, $date, $id)
    {
        $name = "'" . $name . "'";
        $text = "'" . $text . "'";
        $videosrc = "'" . $videosrc . "'";
        $pic1 = "'" . $pic1 . "'";
        $pic2 = "'" . $pic2 . "'";
        $pic3 = "'" . $pic3 . "'";

        $pdo = new PDO($this->dsn, $this->user, $this->password);
        $pdo->exec("set names utf8");
        $pdo->query("UPDATE content SET name =" . $name . ", text = " . $text . ", videosrc = " . $videosrc . ", pic1 =" . $pic1 . ", pic2 = " . $pic2 . ", pic3 = " . $pic3 . ", date =" . $date . "  WHERE content.id =" . $id);
    }
    function NumToString($num)
    {
        if($num<0)
        {
            $num = $num*-1;
            if($num>999999 && $num<1000000000)
            {
                $num = $num/1000000;
                $num = $num."M BC";

            }
            elseif($num>999999999 && $num<1000000000000)
            {
                $num = $num/1000000000;
                $num = $num."B BC";
            }
            else
            {
                $num = $num." BC";
            }
        }
        else
        {
            if($num%10000 ==0)
            {
                $num = $num/10000;
            }
            else
            {
                $day = $num%100;
                $mounth =($num-$day)/100%100;
                $year = ($num-$mounth*100-$day)/10000;
                $num = $year."/".$mounth."/".$day;
            }
        }
        return $num;
    }
}
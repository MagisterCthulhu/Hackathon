<?php
$r = (int)$_GET['id'];
include("../DB.php");
$q = new DB();
$data = $q->SelectID($r);
echo json_encode($data);

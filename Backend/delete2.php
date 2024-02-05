<?php
include_once("baza.php");
$idd = (int) $_GET['id'];
$sql->query("DELETE FROM `admin2` WHERE `id` =".$idd);
header("Location:add.php");
?>
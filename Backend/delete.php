<?php
include_once('config.php');
$id = (int) $_GET['id'];
$db->query("DELETE FROM `admin` WHERE `id` =".$id);
header('Location:index.php')
?>
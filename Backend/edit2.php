<?php
include_once("include/header.php");
include_once("baza.php");
$idd = (int) $_GET['id'];
if(isset($_POST['eddit'])) {
    $br_img = htmlspecialchars($_POST['br_img']);
    $br_name = htmlspecialchars($_POST['br_img']);
    $br_title = htmlspecialchars($_POST['br_img']);
    $br_dollar = htmlspecialchars($_POST['br_img']);
    $launch_img = htmlspecialchars($_POST['launch_img']);
    $launch_name = htmlspecialchars($_POST['launch_name']);
    $launch_title = htmlspecialchars($_POST['launch_title']);
    $launch_dollar = htmlspecialchars($_POST['launch_dollar']);
    $dinner_img = htmlspecialchars($_POST['dinner_img']);
    $dinner_name = htmlspecialchars($_POST['dinner_name']);
    $dinner_title = htmlspecialchars($_POST['dinner_title']);
    $dinner_dollar = htmlspecialchars($_POST['dinner_dollar']);
    $sweet_img = htmlspecialchars($_POST['sweet_img']);
    $sweet_name = htmlspecialchars($_POST['sweet_name']);
    $sweet_title = htmlspecialchars($_POST['sweet_title']);
    $sweet_dollar = htmlspecialchars($_POST['sweet_dollar']);
    $juice_img = htmlspecialchars($_POST['juice_img']);
    $juice_name = htmlspecialchars($_POST['juice_name']);
    $juice_title = htmlspecialchars($_POST['juice_title']);
    $jice_dollar = htmlspecialchars($_POST['juice_dollar']);
    $sql->query("UPDATE `admin2` SET `breakfast_img`='$br_img',`breakfast_name`='$br_name',`breakfast_title`='$br_title',`breakfast_dollar`='$br_dollar',`launch_img`='$launch_img',`launch_name`='$launch_name',`launch_title`='$launch_title',`launch_dollar`='$launch_dollar',`dinner_img`='$dinner_img',`dinner_name`='$dinner_name',`dinner_title`='$dinner_title',`dinner_dollar`='$dinner_dollar',`sweet_img`='$sweet_img',`sweet_name`='$sweet_name',`sweet_title`='$sweet_title',`sweet_dollar`='$sweet_dollar',`juice_img`='$launch_img',`juice_name`='$juice_name',`juice_title`='$juice_title',`jice_dollar`='$jice_dollar' WHERE `id` =".$idd);
    
}
   $rresullt = $sql->query("SELECT `id`, `breakfast_img`, `breakfast_name`, `breakfast_title`, `breakfast_dollar`, `launch_img`, `launch_name`, `launch_title`, `launch_dollar`, `dinner_img`, `dinner_name`, `dinner_title`, `dinner_dollar`, `sweet_img`, `sweet_name`, `sweet_title`, `sweet_dollar`, `juice_img`, `juice_name`, `juice_title`, `jice_dollar` FROM `admin2` WHERE `id` = ".$idd)->fetch_object();
?>
<div class="container">
<form method="post">
  <center>
  <h1>Breakfast</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast Img</label>
    <input value="<?= $rresullt->breakfast_img?>" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast Name</label>
    <input value="<?= $rresullt->breakfast_name?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast Title</label>
    <input value="<?= $rresullt->breakfast_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast $$</label>
    <input value="<?= $rresullt->breakfast_dollar?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_dollar">
    
  </div>
  <center>
  <h1>Launch</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch img</label>
    <input value="<?= $rresullt->launch_img?>" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch Name</label>
    <input value="<?= $rresullt->launch_name?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch Title</label>
    <input value="<?= $rresullt->launch_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch $$</label>
    <input value="<?= $rresullt->launch_dollar?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_dollar">
    
  </div>
  <center>
  <h1>Dinner</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner img</label>
    <input value="<?= $rresullt->dinner_img?>" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner Name</label>
    <input value="<?= $rresullt->dinner_name?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner Title</label>
    <input value="<?= $rresullt->dinner_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner $$</label>
    <input value="<?= $rresullt->dinner_dollar?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_dollar">
    
  </div>
  <center>
  <h1>Sweets</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet img</label>
    <input value="<?= $rresullt->sweet_img?>" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet Name</label>
    <input value="<?= $rresullt->sweet_name?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet Title</label>
    <input value="<?= $rresullt->sweet_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet $$</label>
    <input value="<?= $rresullt->sweet_dollar?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_dollar">
    
  </div>
  <center>
  <h1>Juices</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice img</label>
    <input value="<?= $rresullt->sweet_dollar?>" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice Name</label>
    <input value="<?= $rresullt->juice_img?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice Title</label>
    <input value="<?= $rresullt->juice_name?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice $$</label>
    <input value="<?= $rresullt->juice_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_dollar">
    
  </div>
  <button value="<?= $rresullt->jice_dollar?>" type="submit" class="btn btn-secondary" name="eddit">Add</button> 
  
 
      

 
</form>
<br>
<a href="add.php">
  <button type="submit" class="btn btn-secondary" >Back</button> </a>
</div>
<?php
include_once("include/footer.php");
?>
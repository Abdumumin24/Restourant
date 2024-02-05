<?php
include_once("include/header.php");
include_once("baza.php");
if(isset($_POST['menu'])) {
    $br_img = htmlspecialchars($_POST['br_img']);
    $br_name = htmlspecialchars($_POST['br_name']);
    $br_title = htmlspecialchars($_POST['br_title']);
    $br_dollar = htmlspecialchars($_POST['br_dollar']);
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
    $sql->query("INSERT INTO `admin2`(`id`, `breakfast_img`, `breakfast_name`, `breakfast_title`, `breakfast_dollar`, `launch_img`, `launch_name`, `launch_title`, `launch_dollar`, `dinner_img`, `dinner_name`, `dinner_title`, `dinner_dollar`, `sweet_img`, `sweet_name`, `sweet_title`, `sweet_dollar`, `juice_img`, `juice_name`, `juice_title`, `jice_dollar` )
     VALUES (null ,'".$br_img."','".$br_name."','".$br_title."','".$br_dollar."','".$launch_img."','".$launch_name."','".$launch_title."','".$launch_dollar."','".$dinner_img."','".$dinner_name."','".$dinner_title."','".$dinner_dollar."','".$sweet_img."','".$sweet_name."','".$sweet_title."','".$sweet_dollar."','".$juice_img."','".$juice_name."','".$juice_title."','".$jice_dollar."')");
    
}
   
?>
<div class="container">
<form method="post">
  <center>
  <h1>Breakfast</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast Img</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Breakfast $$</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_dollar">
    
  </div>
  <center>
  <h1>Launch</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch img</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Launch $$</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="launch_dollar">
    
  </div>
  <center>
  <h1>Dinner</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner img</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dinner $$</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dinner_dollar">
    
  </div>
  <center>
  <h1>Sweets</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet img</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sweet $$</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sweet_dollar">
    
  </div>
  <center>
  <h1>Juices</h1>
  </center>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice img</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Juice $$</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="juice_dollar">
    
  </div>
  <button type="submit" class="btn btn-secondary" name="menu">Add</button> 
  
 
      

 
</form>
<br>
<a href="add.php">
  <button type="submit" class="btn btn-secondary" >Back</button> </a>
</div>
<?php
include_once("include/footer.php");
?>
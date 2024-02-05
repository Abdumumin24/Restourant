<?php
include_once('include/header.php');
include_once('config.php');
if(isset($_POST['yes'])):
$company_name = htmlspecialchars($_POST['company_name']);
    $content_title = htmlspecialchars($_POST['content_title']);
    $content_text = htmlspecialchars($_POST['content_text']);
    $content_img = 'eng/uploads'.time().' .jpg';
    $about_img1 = htmlspecialchars($_POST['about_img1']);
    $about_img2 = htmlspecialchars($_POST['about_img2']);
    $about_img3 = htmlspecialchars($_POST['about_img3']);
    $about_img4 = htmlspecialchars($_POST['about_img4']);
    $about_title = htmlspecialchars($_POST['about_title']);
    $about_text1 = htmlspecialchars($_POST['about_text1']);
    $about_text2 = htmlspecialchars($_POST['about_text2']);
    $about_experience = htmlspecialchars($_POST['about_experience']);
    $about_chefs = htmlspecialchars($_POST['about_chefs']);
    $menu_title = htmlspecialchars($_POST['menu_title']);
    $simple_grill_cost = htmlspecialchars($_POST['simple_grill_cost']);
    $healthy_cost = htmlspecialchars($_POST['healthy_cost']);
    $bomb_br_cost = htmlspecialchars($_POST['bomb_br_cost']);
    $grill_cost = htmlspecialchars($_POST['grill_cost']);
    $br_burger_cost = htmlspecialchars($_POST['br_burger_cost']);
    $bbq_cost = htmlspecialchars($_POST['bbq_cost']);
    $tako_cost = htmlspecialchars($_POST['tako_cost']);
    $chicken_br_cost = htmlspecialchars($_POST['chicken_br_cost']);
    $chicken_leg_cost = htmlspecialchars($_POST['chicken_leg_cost']);
    $kfc_cost = htmlspecialchars($_POST['kfc_cost']);
    $best_br_cost = htmlspecialchars($_POST['best_br_cost']);
    $bomb_cost = htmlspecialchars($_POST['bomb_cost']);
    $kebab_cost = htmlspecialchars($_POST['kebab_cost']);
    $steak_cost = htmlspecialchars($_POST['steak_cost']);
    $grill_love_cost = htmlspecialchars($_POST['grill_love_cost']);
    $pizza_love_cost = htmlspecialchars($_POST['pizza_love_cost']);
    $chicken_love_cost = htmlspecialchars($_POST['chicken_love_cost']);
    $spagetti_love_cost = htmlspecialchars($_POST['spagetti_love_cost']);
    $bbq_cake_cost = htmlspecialchars($_POST['bbq_cake_cost']);
    $tiramisu_cost = htmlspecialchars($_POST['tiramisu_cost']);
    $napoleon_cost = htmlspecialchars($_POST['napoleon_cost']);
    $medovik_cost = htmlspecialchars($_POST['medovik_cost']);
    $bounty_cost = htmlspecialchars($_POST['bounty_cost']);
    $cream_brule_cost = htmlspecialchars($_POST['cream_brule_cost']);
    $orange_juic_cost = htmlspecialchars($_POST['orange_juic_cost']);
    $sea_cost = htmlspecialchars($_POST['sea_cost']);
    $liver_cost = htmlspecialchars($_POST['liver_cost']);
    $medovi_cost = htmlspecialchars($_POST['medovi_cost']);
    $schweppes_cost = htmlspecialchars($_POST['schweppes_cost']);
    $cola_cost = htmlspecialchars($_POST['cola_cost']);
    $team_img1 = htmlspecialchars($_POST['team_img1']);
    $team_img2 = htmlspecialchars($_POST['team_img2']);
    $team_img3 = htmlspecialchars($_POST['team_img3']);
    $team_img4 = htmlspecialchars($_POST['team_img4']);
    $chefs_name1 = htmlspecialchars($_POST['chefs_name1']);
    $chefs_name2 = htmlspecialchars($_POST['chefs_name2']);
    $chefs_name3 = htmlspecialchars($_POST['chefs_name3']);
    $chefs_name4 = htmlspecialchars($_POST['chefs_name4']);


    
    
    $db->query("INSERT INTO `admin`(`id`, `company_name`, `content_title`, `content_text`, `content_img`, `about_img1`, `about_img2`, `about_img3`, `about_img4`, `about_title`, `about_text1`, `about_text2`, `about_experience`, `about_chefs`, `menu_title`, `simple_grill_cost`, `healthy_cost`, `bomb_br_cost`, `grill_cost`, `br_burger_cost`, `bbq_cost`, `tako_cost`, `chicken_br_cost`, `chicken_leg_cost`, `kfc_cost`, `best_br_cost`, `bomb_cost`, `kebab_cost`, `steak_cost`, `grill_love_cost`, `pizza_love_cost`, `chicken_love_cost`, `spagetti_love_cost`, `bbq_cake_cost`, `tiramisu_cost`, `napoleon_cost`, `medovik_cost`, `bounty_cost`, `cream_brule_cost`, `orange_juic_cost`, `sea_cost`, `liver_cost`, `medovi_cost`, `schweppes_cost`, `cola_cost`, `team_img1`, `team_img2`, `team_img3`, `team_img4`, `chefs_name1`, `chefs_name2`, `chefs_name3`, `chefs_name4`) VALUES
     (null , '".$company_name."','".$content_title."','".$content_text."','".$content_img."','".$about_img1."','".$about_img2."','".$about_img3."','".$about_img4."','".$about_title."','".$about_text1."','".$about_text2."','".$about_experience."','".$about_chefs."','".$menu_title."','".$simple_grill_cost."','".$healthy_cost."','".$bomb_br_cost."','".$grill_cost."','".$br_burger_cost."','".$bbq_cost."','".$tako_cost."','".$chicken_br_cost."','".$chicken_leg_cost."','".$kfc_cost."','".$best_br_cost."','".$bomb_cost."','".$kebab_cost."','".$steak_cost."','". $grill_love_cost."','".$pizza_love_cost."','".$chicken_love_cost."','".$spagetti_love_cost."','".$bbq_cake_cost."','".$tiramisu_cost."','".$napoleon_cost."','".$medovik_cost."','".$bounty_cost."','".$cream_brule_cost."','".$orange_juic_cost."','".$sea_cost."','".$liver_cost."','".$medovi_cost."','".$schweppes_cost ."','".$cola_cost ."','".$team_img1 ."','".$team_img2."','".$team_img3."','".$team_img4."','".$chefs_name1."','".$chefs_name2."','".$chefs_name3."','".$chefs_name4."')");
  if(move_uploaded_file($_FILES['content_img'] ['tmp_name'], $content_img)):
    $sql = "SELECT * FROM `admin` ";
    $query = $db->query($sql);
  

?>

<?php else: ?>
    <?php endif?>
    <?php else:?>


<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Company Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="company_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Content Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Content Text</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content_text">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Content Image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 3</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 4</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img4">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Text 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_text1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Text 2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_text2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Experience</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_experience">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Chefs</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_chefs">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Menu Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="menu_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Simple Grill Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="simple_grill_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Healthy Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="healthy_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Bomb Breakfast Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bomb_br_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Grill Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="grill_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Breakfast Burger Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_burger_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >BBQ Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bbq_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Tako Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tako_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chicken Breakfast Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chicken_br_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chicken Leg Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chicken_leg_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >KFC Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kfc_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Best Burger Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="best_br_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Bomb Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bomb_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Kebab Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kebab_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Steak Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="steak_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Grill Love Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="grill_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Pizza Love Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pizza_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chicken Love Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chicken_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Spagetti Love Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="spagetti_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >BBQ Cake Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bbq_cake_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Tiramisu Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tiramisu_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Napoleon Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="napoleon_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Medovik Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medovik_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Bounty Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bounty_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Cream Brulle Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cream_brule_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Orange Juice Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="orange_juic_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Sea Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sea_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Liver Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="liver_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Medovi Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medovi_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Schweppes Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="schweppes_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Cola Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cola_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image 3</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image 4</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img4">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 3</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 4</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name4">
    
  </div>
  
  <button type="" class="btn btn-primary" name="yes">Send</button>
</form>

<?php endif?>

<?php
include_once('include/footer.php');
?>
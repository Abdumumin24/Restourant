<?php
include_once('include/header.php');
include_once('config.php');
$id = (int) $_GET['id'];
$result = $db->query("SELECT `id`, `company_name`, `content_title`, `content_text`, `content_img`, `about_img1`, `about_img2`, `about_img3`, `about_img4`, `about_title`, `about_text1`, `about_text2`, `about_experience`, `about_chefs`, `menu_title`, `simple_grill_cost`, `healthy_cost`, `bomb_br_cost`, `grill_cost`, `br_burger_cost`, `bbq_cost`, `tako_cost`, `chicken_br_cost`, `chicken_leg_cost`, `kfc_cost`, `best_br_cost`, `bomb_cost`, `kebab_cost`, `steak_cost`, `grill_love_cost`, `pizza_love_cost`, `chicken_love_cost`, `spagetti_love_cost`, `bbq_cake_cost`, `tiramisu_cost`, `napoleon_cost`, `medovik_cost`, `bounty_cost`, `cream_brule_cost`, `orange_juic_cost`, `sea_cost`, `liver_cost`, `medovi_cost`, `schweppes_cost`, `cola_cost`, `team_img1`, `team_img2`, `team_img3`, `team_img4`, `chefs_name1`, `chefs_name2`, `chefs_name3`, `chefs_name4` FROM `admin` WHERE `id` =".$id)->fetch_object();
if(isset($_POST['send'])):
  $company_name = htmlspecialchars($_POST['company_name']);
  $content_title = htmlspecialchars($_POST['content_title']);
  $content_text = htmlspecialchars($_POST['content_text']);
  $content_img = '../../../restourant/eng/uploads'.time().' .jpg';
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

    $db->query("UPDATE `admin` SET
     `company_name`='$company_name',`content_title`='$content_title',`content_text`='$content_text',`content_img`='$content_img',`about_img1`='$about_img1',`about_img2`='$about_img2',`about_img3`='$about_img3',`about_img4`='$about_img4',`about_title`='$about_title',`about_text1`='$about_text1',`about_text2`='$about_text2',`about_experience`='$about_experience',`about_chefs`='$about_chefs',`menu_title`='$menu_title',`simple_grill_cost`='$simple_grill_cost',`healthy_cost`='$healthy_cost',`bomb_br_cost`='$bomb_br_cost',`grill_cost`='$grill_cost',`br_burger_cost`='$br_burger_cost',`bbq_cost`='$bbq_cost',`tako_cost`='$tako_cost',`chicken_br_cost`='$chicken_br_cost',`chicken_leg_cost`='$chicken_leg_cost',`kfc_cost`='$kfc_cost',`best_br_cost`='$best_br_cost',`bomb_cost`='$bomb_cost',`kebab_cost`='$kebab_cost',`steak_cost`='$steak_cost',`grill_love_cost`='$grill_love_cost',`pizza_love_cost`='$pizza_love_cost',`chicken_love_cost`='$chicken_love_cost',`spagetti_love_cost`='$spagetti_love_cost',`bbq_cake_cost`='$bbq_cake_cost',`tiramisu_cost`='$tiramisu_cost',`napoleon_cost`='$napoleon_cost',`medovik_cost`='$medovik_cost',`bounty_cost`='$bounty_cost',`cream_brule_cost`='$cream_brule_cost',`orange_juic_cost`='$orange_juic_cost',`sea_cost`='$sea_cost',`liver_cost`='$liver_cost',`medovi_cost`='$medovi_cost',`schweppes_cost`='$schweppes_cost',`cola_cost`='$cola_cost',`team_img1`='$team_img1',`team_img2`='$team_img2',`team_img3`='$team_img3',`team_img4`='$team_img4',`chefs_name1`='$chefs_name1',`chefs_name2`='$chefs_name2',`chefs_name3`='$chefs_name3',`chefs_name4`='$chefs_name4' WHERE `id` =".$id);
    

?>
<?php endif?>

<form method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Company Name</label>
    <input value="<?= $result->company_name?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="company_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Content Title</label>
    <input value="<?= $result->content_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Content Text</label>
    <input value="<?= $result->content_text?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content_text">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Content Image</label>
    <input value="<?= $result->content_img?>" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content_img">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 1</label>
    <input value="<?= $result->about_img1?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 2</label>
    <input value="<?= $result->about_img2?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 3</label>
    <input value="<?= $result->about_img3?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Image 4</label>
    <input value="<?= $result->about_img4?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_img4">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Title</label>
    <input value="<?= $result->about_title?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Text 1</label>
    <input value="<?= $result->about_text1?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_text1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Text 2</label>
    <input value="<?= $result->about_text2?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_text2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Experience</label>
    <input value="<?= $result->about_experience?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_experience">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >About Chefs</label>
    <input value="<?= $result->about_chefs?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="about_chefs">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Menu Title</label>
    <input value="<?= $result->menu_title?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="menu_title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Simple Grill Cost</label>
    <input value="<?= $result->simple_grill_cost?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="simple_grill_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Healthy Cost</label>
    <input value="<?= $result->healthy_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="healthy_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Bomb Breakfast Cost</label>
    <input value="<?= $result->bomb_br_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bomb_br_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Grill Cost</label>
    <input value="<?= $result->grill_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="grill_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Breakfast Burger Cost</label>
    <input value="<?= $result->br_burger_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="br_burger_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >BBQ Cost</label>
    <input value="<?= $result->bbq_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bbq_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Tako Cost</label>
    <input value="<?= $result->tako_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tako_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chicken Breakfast Cost</label>
    <input value="<?= $result->chicken_br_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chicken_br_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chicken Leg Cost</label>
    <input value="<?= $result->chicken_leg_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chicken_leg_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >KFC Cost</label>
    <input value="<?= $result->kfc_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kfc_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Best Burger Cost</label>
    <input value="<?= $result->best_br_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="best_br_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Bomb Cost</label>
    <input value="<?= $result->bomb_cost?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bomb_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Kebab Cost</label>
    <input value="<?= $result->kebab_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kebab_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Steak Cost</label>
    <input value="<?= $result->steak_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="steak_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Grill Love Cost</label>
    <input value="<?= $result->grill_love_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="grill_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Pizza Love Cost</label>
    <input value="<?= $result->pizza_love_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pizza_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chicken Love Cost</label>
    <input value="<?= $result->chicken_love_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chicken_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Spagetti Love Cost</label>
    <input value="<?= $result->spagetti_love_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="spagetti_love_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >BBQ Cake Cost</label>
    <input value="<?= $result->bbq_cake_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bbq_cake_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Tiramisu Cost</label>
    <input value="<?= $result->tiramisu_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tiramisu_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Napoleon Cost</label>
    <input value="<?= $result->napoleon_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="napoleon_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Medovik Cost</label>
    <input value="<?= $result->medovik_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medovik_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Bounty Cost</label>
    <input value="<?= $result->bounty_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bounty_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Cream Brulle Cost</label>
    <input value="<?= $result->cream_brule_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cream_brule_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Orange Juice Cost</label>
    <input value="<?= $result->orange_juic_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="orange_juic_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Sea Cost</label>
    <input value="<?= $result->sea_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sea_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Liver Cost</label>
    <input value="<?= $result->liver_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="liver_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Medovi Cost</label>
    <input value="<?= $result->medovi_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medovi_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Schweppes Cost</label>
    <input value="<?= $result->schweppes_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="schweppes_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Cola Cost</label>
    <input value="<?= $result->cola_cost?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cola_cost">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image 1</label>
    <input value="<?= $result->team_img1?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image2</label>
    <input value="<?= $result->team_img2?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image 3</label>
    <input value="<?= $result->team_img3?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Team Image 4</label>
    <input value="<?= $result->team_img4?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="team_img4">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 1</label>
    <input value="<?= $result->chefs_name1?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 2</label>
    <input value="<?= $result->chefs_name2?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name2">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 3</label>
    <input value="<?= $result->chefs_name3?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name3">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chefs Name 4</label>
    <input value="<?= $result->chefs_name4?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chefs_name4">
    
  </div>
  
  
  <button type="" class="btn btn-primary" name="send">Send</button>
</form>

<?php
include_once('include/footer.php');
?>
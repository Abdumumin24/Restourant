<?php
include_once("include/header.php");
include_once("config.php");
$id = (int) $_GET['id'];
$view = $db->query("SELECT `id`, `company_name`, `content_title`, `content_text`, `content_img`, `about_img1`, `about_img2`, `about_img3`, `about_img4`, `about_title`, `about_text1`, `about_text2`, `about_experience`, `about_chefs`, `menu_title`, `simple_grill_cost`, `healthy_cost`, `bomb_br_cost`, `grill_cost`, `br_burger_cost`, `bbq_cost`, `tako_cost`, `chicken_br_cost`, `chicken_leg_cost`, `kfc_cost`, `best_br_cost`, `bomb_cost`, `kebab_cost`, `steak_cost`, `grill_love_cost`, `pizza_love_cost`, `chicken_love_cost`, `spagetti_love_cost`, `bbq_cake_cost`, `tiramisu_cost`, `napoleon_cost`, `medovik_cost`, `bounty_cost`, `cream_brule_cost`, `orange_juic_cost`, `sea_cost`, `liver_cost`, `medovi_cost`, `schweppes_cost`, `cola_cost`, `team_img1`, `team_img2`, `team_img3`, `team_img4`, `chefs_name1`, `chefs_name2`, `chefs_name3`, `chefs_name4` FROM `admin` WHERE `id` =".$id)->fetch_object();
if(isset($_POST['yes'])) {
    $company_name = htmlspecialchars($_POST['company_name']);
        $content_title = htmlspecialchars($_POST['content_title']);
        $content_text = htmlspecialchars($_POST['content_text']);
        $content_img = htmlspecialchars($_POST['content_img']);
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
    }
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><?= $view->company_name?></th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $view->content_title?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    <tr>
      <th scope="row"><?= $view->company_name?></th>
      
      
    </tr>
    
  </tbody>
</table>
<?php
include_once("include/footer.php");
?>
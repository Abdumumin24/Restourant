<?php
include_once("include/header.php");
include_once("baza.php");
$id = (int) $_GET['id'];
$view2 = $sql->query("SELECT `id`, `food_name`, `drink_name`, `desert_name`, `number_food`, `number_drink`, `number_desert`, `adress`, `phone` FROM `admin` WHERE `id` =".$id)->fetch_object();
if(isset($_POST['xa'])) {
    $food_name = htmlspecialchars($_POST['food_name']);
  $drink_name = htmlspecialchars($_POST['drink_name']);
  $desert_name = htmlspecialchars($_POST['desert_name']);
  $number_food = htmlspecialchars($_POST['number_food']);
  $number_drink = htmlspecialchars($_POST['number_drink']);
  $number_desert = htmlspecialchars($_POST['number_desert']);
  $adress = htmlspecialchars($_POST['adress']);
  $phone = htmlspecialchars($_POST['phone']);
  $sql->query("INSERT INTO `admin`(`id`, `food_name`, `drink_name`, `desert_name`, `number_food`, `number_drink`, `number_desert`, `adress`, `phone`) VALUES
   (null ,'".$food_name."','".$drink_name."','".$desert_name."','".$number_food."','".$number_drink."','".$number_desert."','".$adress."','".$phone."')");
}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id#</th>
      <td><?= $view2->id?></td>
      <td></td>
      <td></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Food Name</th>
      <td><?= $view2->food_name?></td>
    </tr>
    <tr>
      <th scope="row">Drink Name</th>
      <td><?= $view2->drink_name?></td>
    </tr>
    <tr>
      <th scope="row">Desert Name</th>
      <td><?= $view2->desert_name?></td>
    </tr>
    <tr>
      <th scope="row">Number of Food</th>
      <td><?= $view2->number_food?></td>
    </tr>
    <tr>
      <th scope="row">Number of Drink</th>
      <td><?= $view2->number_drink?></td>
    </tr>
    <tr>
      <th scope="row">Number of Deser</th>
      <td><?= $view2->number_desert?></td>
    </tr>
    <tr>
      <th scope="row">Adress</th>
      <td><?= $view2->adress?></td>
    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td><?= $view2->phone?></td>
    </tr>

  </tbody>
</table>
<?php
include_once("include/footer.php");
?>
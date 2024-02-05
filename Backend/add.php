<?php
include_once("include/header.php");
include_once("baza.php");
$sll = "SELECT * FROM `admin2` WHERE 1";
$querry = $sql->query($sll);
?>
<center>
<h1>Menu Add</h1></center>
<div class="container">
<table class="table">
  <thead>
  

    <tr>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">$$</th>
    </tr>
  </thead>
  <tbody>
  <?php while($roow = $querry->fetch_object()):?>
    <tr>
      <th scope="row"><?= $roow->breakfast_img?></th>
      <td><?= $roow->breakfast_name?></td>
      <td><?= $roow->breakfast_title?></td>
      <td><?= $roow->breakfast_dollar?></td>
      <td><a href="edit2.php?id=<?= $roow->id?>"><button type="button" class="btn btn-outline-warning" >Edit</button></a></td>
      <td><a href="delete2.php?id=<?= $roow->id?>"  onclick="confirm('Aminmisiz')"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
    </tr>
    
    <?php endwhile;?>
  </tbody>
</table>
<a href="menu-insert.php">
<button type="button" class="btn btn-outline-secondary">Insert</button></a>
</div>
<?php
include_once("include/footer.php");
?>
<?php
include_once('include/header.php');
include_once('baza.php');


$were = "SELECT * FROM `admin` WHERE 1";
$quer = $sql->query($were);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Food Name</th>
      <th scope="col">Drink Name</th>
      <th scope="col">Desert Name</th>
    </tr>
  </thead>
  <tbody>
  <?php while($wow = $quer->fetch_object()):?>
    <tr>
      <th scope="row"><?= $wow->id?></th>
      <td><?= $wow->food_name?></td>
      <td><?= $wow->drink_name?></td>
      <td><?= $wow->desert_name?></td>
      <td>
          <a href="view2.php?id=<?= $wow->id?>"><button type="button" class="btn btn-outline-primary">View</button></a>
        </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

  </body>
</html>

<?php
include_once('include/footer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
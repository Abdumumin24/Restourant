<?php
include_once('include/header.php');
include_once('config.php'); 
$sql = "SELECT * FROM `admin` WHERE 1";
$query = $db->query($sql);
?>
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Settings</th>
    </tr>
  </thead>
  <tbody>
       <?php while($row = $query->fetch_object()):?>
    <tr>
      <th scope="row"><?= $row->company_name?></th>
      <td><?= $row->content_title?></td>
      <td><?= $row->content_text?></td>
      <td><?= $row->content_img?></td>
      <td>
          <a href="content.php?id=<?= $row->id?>"><button type="button" class="btn btn-outline-warning">Edit</button></a>
          
        </td>
       
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
        

                

            
<?php
include_once('include/footer.php');
?>
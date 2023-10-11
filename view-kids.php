<h1>Kids</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Birth Year</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($kid = $kids->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $kid['kid_id']; ?></td>
     <td><?php echo $kid['kid_name']; ?></td>
     <td><?php echo $kid['kid_birthyear']; ?></td>
     <td>
  <form method="post" action="pets-by-kids.php">
    <input type="hidden" name="kid" value="<?php echo $kid['kid_id'];?>"/>
    <button type="submit" class="btn btn-primary">Pets</button>
  </form>
     </td>     
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>

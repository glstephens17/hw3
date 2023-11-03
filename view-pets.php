<h1>Pets</h1>
<?php
include "view-pets-newform.php";
?>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Pet Name</th>
      <th>Pet Breed</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($pet = $pets->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $pet['pet_id']; ?></td>
     <td><?php echo $pet['pet_name']; ?></td>
     <td><?php echo $pet['pet_breed']; ?></td>
     <td>
  <form method="delete" action="pets.php">
    <input type="hidden" name="petID" value="<?php echo $pet['pet_id'];?>"/>
    <button type="submit" class="btn btn-primary">Delete</button>
  </form>
     </td>     
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>

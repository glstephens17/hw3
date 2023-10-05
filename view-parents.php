<h1>Parents</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>City</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($parent = $parents->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $parent['parent_id']; ?></td>
     <td><?php echo $parent['parent_name']; ?></td>
     <td><?php echo $parent['city_name']; ?></td>
     <td><a href="parents-pets.php?id=<?php echo $parent['parent_id']; ?>"</a><td>
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>

<div class = "row">
<div class = "col">
<h1>Parents</h1>
</div> 
  <div class = "col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg>
  </div>
</div>
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

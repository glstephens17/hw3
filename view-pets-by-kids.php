<h1>Pets by Kids</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Pet Name</th>
      <th>Pet Breed</th>
      <th>Kid Name</th>
      <th>Kid Birth Year</th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($pet = $pets-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $pet['pet_name'];?></td>
                    <td> <?php echo $pet['pet_breed'];?></td>
                    <td><?php echo $pet['kid_name'];?></td>
                    <td><?php echo $pet['kid_birthyear'];?></td>
                  </tr>                  
                <?php
              }
        ?>
      </tbody>    
  </table>
</div>

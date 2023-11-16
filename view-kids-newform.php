<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<button type="button" id="submit-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kidModal">
<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="kidModal" tabindex="-1" aria-labelledby="kidModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="kidModalLabel">New Kid</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
  <div class="mb-3">
    <label for="kName" class="form-label">Kid Name</label>
    <input type="text" class="form-control" id="kName" name="kName">
      </div>
  <div class="mb-3">
    <label for="kBirthYear" class="form-label">Kid Birth Year</label>
    <input type="text" class="form-control" id="kBirthYear" name="kBirthYear">
  </div>
      <div class="mb-3">
    <label for="pID" class="form-label">Parent ID</label>
    <input type="text" class="form-control" id="pID" name="pID">
  </div>
          <input type="hidden" name="actionType" value="Add">
   <button type="submit" class="btn btn-primary">Add</button>
</form>
<script>
  $(document).ready(function() {  
  $('#submit-button').click(function() {  
    alert('Are you sure you want to add a new Kid?');  
  });  
});
</script>

          </div>
        </div>
  </div>
</div>

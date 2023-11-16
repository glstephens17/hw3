
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.rotate/2.2/jquery.rotate.min.js"></script>    
<?php
require_once("util-db.php");
require_once("model-parents.php");

$pageTitle = "Parents";
include "view-header.php";
<div>
 <img id="my-image" src="https://blog.edmentum.com/sites/default/files/styles/blog_image/public/images/VtEj_jqr.png?itok=d4BUkLj6">  
</div>
if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertParent($_POST['pName'],$_POST['pCity'])){
          echo '<div class="alert alert-success" role="alert">Added a new Parent successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the parent</div>';
        }
        break;
    case "Edit":
          if(updateParent($_POST['parentName'], $_POST['parentCity'], $_POST['pId']))
          {
          echo '<div class="alert alert-success" role="alert"> Parent successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deleteParent($_POST['pId']))
        {
        echo '<div class="alert alert-success" role="alert"> Parent successfully deleted!</div>';
        }
        else {
        echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }
    //more case to add if needed
  }
}
$parents = selectParents();
include "view-parents.php";
include "view-footer.php";
?>
<button id="rotate-button">Rotate Image</button>  
<script>  
  $(document).ready(function() {  
    $('#rotate-button').click(function() {  
      $('#my-image').rotate(45);  
    });  
  });  
</script>

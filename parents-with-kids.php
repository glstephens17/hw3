<?php
require_once("util-db.php");
require_once("model-parents-with-kids.php");
$pageTitle = "Parents";
include "view-header.php";

if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertParentWithKids($_POST['kid_name'],$_POST['kid_birthyear'],$_POST['pid'])){
          echo '<div class="alert alert-success" role="alert">Added a new Kid successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the Kid</div>';
        }
        break;
    case "Edit":
          if(updateParentWithKids($_POST['kid_name'], $_POST['kid_birthyear'], $_POST['pid'],$_POST['kid']))
          {
          echo '<div class="alert alert-success" role="alert"> Kid successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deleteParentWithKids($_POST['kid']))
        {
        echo '<div class="alert alert-success" role="alert"> Kid successfully deleted!</div>';
        }
        else {
        echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }
    //more case to add if needed
  }
}


$parents = selectParents();
include "view-parents-with-kids.php";
include "view-footer.php";
?>

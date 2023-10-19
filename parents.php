<?php
require_once("util-db.php");
require_once("model-parents.php");

$pageTitle = "Parents";
include "view-header.php";

if(isset($POST['actionType'])){
  switch($POST['actionType']){
    case "Add":
        if(insertParent($POST['pName'],$POST['pCity'])){
          echo '<div class="alert alert-success" role="alert">Added a new Parent successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the parent</div>';
        }
        break;
  }
}
$parents = selectParents();
include "view-parents.php";
include "view-footer.php";
?>

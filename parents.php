<?php
require_once("util-db.php");
require_once("model-parents.php");

$pageTitle = "Parents";
include "view-header.php";

if(isset($POST['actionType'])){
  switch($POST['actionType']){
    case "Add":
        insertParent($POST['parentName'],$POST['parentCity']);
        break;
  }
}
$parents = selectParents();
include "view-parents.php";
include "view-footer.php";
?>

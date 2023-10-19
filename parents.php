<?php
require_once("util-db.php");
require_once("model-parents.php");

$pageTitle = "Parents";
include "view-header.php";

if(isset($POST['actionType'])){
  switch(($POST['actionType']){
          case "Add":
        insertParent($POST['pName'],$POST['pCity']);
        break;
  }
}
$parents = selectParents();
include "view-parents.php";
include "view-footer.php";
?>

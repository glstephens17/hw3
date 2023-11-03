<?php
require_once("util-db.php");
require_once("model-kids.php");

$pageTitle = "Kids";
include "view-header.php";
if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertKid($_POST['kName'],$_POST['kBirthYear'],$_POST['pID'] )){
          echo '<div class="alert alert-success" role="alert">Added a new kid successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the kid</div>';
        }
        break;
    case "Edit":
          if(updateKid($_POST['kidName'], $_POST['kidBirthYear'], $_POST['pid'], $_POST['kId']))
               {
          echo '<div class="alert alert-success" role="alert"> Kid successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deleteKid($_POST['kId']))
        {
        echo '<div class="alert alert-success" role="alert"> Kid successfully deleted!</div>';
        }
        else {
        echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }
  }
}
$kids = selectKids();
include "view-kids.php";
include "view-footer.php";
?>

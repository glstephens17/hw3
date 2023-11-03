<?php
require_once("util-db.php");
require_once("model-pets.php");

$pageTitle = "Pets";
include "view-header.php";
if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertPet($_POST['pName'],$_POST['pBreed'])){
          echo '<div class="alert alert-success" role="alert">Added a new pet successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the pet</div>';
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
  }
}
$pets = selectPets();
include "view-pets.php";
include "view-footer.php";
?>

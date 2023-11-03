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
          if(updatePet($_POST['petName'], $_POST['petBreed'], $_POST['pId']))
          {
          echo '<div class="alert alert-success" role="alert"> Pet successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deletePet($_POST['pId']))
        {
        echo '<div class="alert alert-success" role="alert"> Pet successfully deleted!</div>';
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

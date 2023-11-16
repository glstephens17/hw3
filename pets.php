<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
<canvas id="my-chart"></canvas>
        
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
<script>  
    var canvas = document.getElementById("my-chart");  
  
    new Chart(canvas, {  
      type: 'bar',  
      data: {  
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],  
        datasets: [{  
          label: 'Sales',  
          data: [12, 19, 3, 5, 2, 3, 8],  
          backgroundColor: 'rgba(54, 162, 235, 0.2)',  
          borderColor: 'rgba(54, 162, 235, 1)',  
          borderWidth: 1  
        }]  
      },  
      options: {  
        responsive: true,  
        scales: {  
          yAxes: [{  
            ticks: {  
              beginAtZero: true  
            }  
          }]  
        }  
      }  
    } 
  });  
</script>  


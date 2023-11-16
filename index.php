
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<h1>Homework 4</h1>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
<canvas id="my-chart"></canvas>
        
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
  });  
</script>  


<?php
include "view-footer.php";
?>

<link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css">  
  <script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>   
<?php

$pageTitle = "3D Animation";
include "view-header.php";
include "view-footer.php";
?>
<video id="myVideo" controls>  
  <source src="https://www.youtube.com/watch?v=c0MrSpTWc8o" type="video/webm">  
</video>  
  <script>  
    const player = new Plyr('#myVideo');  
  </script> 

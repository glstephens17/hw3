<link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css">  
  <script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>   
<?php

$pageTitle = "3D Animation";
include "view-header.php";
include "view-footer.php";
?>
<video id="myVideo" controls>  
  <source src="https://test-videos.co.uk/vids/bigbuckbunny/mp4/h264/1080/Big_Buck_Bunny_1080_10s_1MB.mp4" type="video/mp4">  
</video>  
  <script>  
    const player = new Plyr('#myVideo');  
  </script> 

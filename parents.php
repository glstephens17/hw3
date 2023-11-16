
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>  
<?php
require_once("util-db.php");
require_once("model-parents.php");

$pageTitle = "Parents";
include "view-header.php";
if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertParent($_POST['pName'],$_POST['pCity'])){
          echo '<div class="alert alert-success" role="alert">Added a new Parent successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the parent</div>';
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
    //more case to add if needed
  }
}
$parents = selectParents();
include "view-parents.php";
include "view-footer.php";
?>
<div id="myCanvas"></div>  
<script>  
    // Create a scene  
    const scene = new THREE.Scene();  
  
    // Create a camera  
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);  
    camera.position.z = 5;  
  
    // Create a renderer  
    const renderer = new THREE.WebGLRenderer();  
    renderer.setSize(window.innerWidth, window.innerHeight);  
    document.getElementById("myCanvas").appendChild(renderer.domElement);  
  
    // Create a cube  
    const geometry = new THREE.BoxGeometry();  
    const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });  
    const cube = new THREE.Mesh(geometry, material);  
    scene.add(cube);  
  
    // Render the scene  
    function animate() {  
      requestAnimationFrame(animate);  
      cube.rotation.x += 0.01;  
      cube.rotation.y += 0.01;  
      renderer.render(scene, camera);  
    }  
    animate();  
  </script>  

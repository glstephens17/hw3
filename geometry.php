

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>  
<?php

$pageTitle = "3D Animation";
include "view-header.php";
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
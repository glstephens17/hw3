<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'gabsoucr_hw3user', '~5Q-V)aMN?+@', 'gabsoucr_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>

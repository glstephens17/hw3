<?php
require_once("util-db.php");
require_once("model-pets-by-kids.php");
$pageTitle = "Pets by Kids";
include "view-header.php";
$parents = selectPetsByKids($_POST['kid']);
include "view-pets-by-kids.php";
include "view-footer.php";
?>

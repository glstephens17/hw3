<?php
require_once("util-db.php");
require_once("model-parents.php");

$pageTitle = "Parents";
include "view-header.php";
$Parents = selectParents();
include "view-parents.php";
include "view-footer.php";
?>

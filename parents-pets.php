<?php
require_once("util-db.php");
require_once("model-parents-pets.php");

$pageTitle = "Parents Pets";
include "view-header.php";
$parents = selectParentsPets($_GET['id']);
include "view-parents-pets.php";
include "view-footer.php";
?>

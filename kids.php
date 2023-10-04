<?php
require_once("util-db.php");
require_once("model-kids.php");

$pageTitle = "Kids";
include "view-header.php";
$kids = selectKids();
include "view-kids.php";
include "view-footer.php";
?>

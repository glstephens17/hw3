<?php
require_once("util-db.php");
require_once("model-parents-with-kids.php");
$pageTitle = "Parents";
include "view-header.php";
$parents = selectParents();
include "view-parents-with-kids.php";
include "view-footer.php";
?>

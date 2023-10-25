<?php
function selectParents() {
try {
$conn = get_db_connection();
			$stmt = $conn->prepare("SELECT parent_id, parent_name, city_name FROM `parents`");
$stmt->execute();
$result = $stmt->get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}
function selectKidsByParent($did) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("SELECT k.kid_id,p.parent_id, parent_name, city_name, kid_name, kid_birthyear FROM `parents` p join `kids` k on p.parent_id=k.parent_id where k.parent_id=?");
$stmt->bind_param("i", $did);
$stmt->execute();
$result = $stmt->get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

function deleteParentWithKids($kid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("Delete from `kids` where kid_id=? ");
$stmt->bind_param("i", $kid);
$stmt->execute();
$success = $stmt->execute();
$conn->close();
return $success;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

function insertParentWithKids( $kid_name, $kid_birthyear, $pid) {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("INSERT INTO `kids` (`kid_name`, `kid_birthyear`, `parent_id`)VALUES ( ?, ?, ?);");
$stmt->bind_param("ssi", $kid_name, $kid_birthyear,$pid);
$success = $stmt->execute();
$conn->close();
return $success;
} catch (Exception $e) {
console.log("error",$e);
$conn->close();
throw $e;
}
}

function selectParentsForInput() {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("SELECT parent_id, parent_name FROM `parent` order by
parent_name ");
$stmt->execute();
$result = $stmt->get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

?>

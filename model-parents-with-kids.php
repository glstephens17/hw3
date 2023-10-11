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
$stmt = $conn->prepare("SELECT p.parent_id, parent_name, city_name, kid_name, kid_birthyear FROM `parents` p join `kids` k on p.parent_id=k.parent_id where k.parent_id=?");
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
?>

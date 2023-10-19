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
function insertParent($parentName, $parentCity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `parents` (`parent_name`, `city_name`) VALUES (?,?);");
        $stmt->bind_param("ss", $parentName, $parentCity);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

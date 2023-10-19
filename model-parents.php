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
function insertParent($pName, $pCity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `parents` (`parent_name`, `city_name`) VALUES (?,?);");
        $stmt->bind_param("ss", $pName, $pCity);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateParent($parentName, $parentCity, $pId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `parents` set `parent_name` = ?, `city_name` = ? WHERE `parent_id` = ?");
        $stmt->bind_param("ssi", $parentName, $parentCity, $pId);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteParent($pId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `parents` WHERE `parent_id` = ?");
        $stmt->bind_param("i", $pId);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

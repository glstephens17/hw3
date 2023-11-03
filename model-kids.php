<?php
function selectKids() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT kid_id, kid_name, kid_birthyear FROM `kids`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertKid($kName, $kBirthYear, $pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `kids` (`kid_name`, `kid_birthyear`, `parent_id`) VALUES (?,?,?);");
        $stmt->bind_param("ssi", $kName, $kBirthYear, $pID);
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

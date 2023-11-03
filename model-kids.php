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
function updateKid($kidName, $kidBirthYear, $pId, $kId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `kids` set `kid_name` = ?, `kid_birthyear` = ?, `parent_id`=? WHERE `kid_id` = ?");
        $stmt->bind_param("ssii",$kidName, $kidBirthYear, $pId, $kId);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteKid($kId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `kids` WHERE `kid_id` = ?");
        $stmt->bind_param("i", $kId);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

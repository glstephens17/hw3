<?php
function selectPetsByKids($kid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT k.kid_id, kid_name, kid_birthyear, pet_name, pet_breed FROM `kids` k join `pet_ownership` ps on k.kid_id=ps.kid_id join `pet` p on p.pet_id=ps.pet_id where k.kid_id=?");
        $stmt->bind_param("i", $kid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertPetsByKids($kName, $kBirthYear, $pID) {
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
?>

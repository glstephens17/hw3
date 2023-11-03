<?php
function selectPets() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `pet`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertPet($pName, $pBreed) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `pet` (`pet_name`, `pet_breed`) VALUES (?,?);");
        $stmt->bind_param("ss", $pName, $pBreed);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updatePet($petName, $petBreed, $pId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `pet` set `pet_name` = ?, `pet_breed` = ? WHERE `pet_id` = ?");
        $stmt->bind_param("ssi", $petName, $petBreed, $pId);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deletePet($pId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `pet` WHERE `pet_id` = ?");
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

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
?>

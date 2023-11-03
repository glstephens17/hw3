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
INSERT INTO `kids` (`kid_id`, `kid_name`, `kid_birthyear`, `parent_id`) VALUES (NULL, 'Random', '2005', '1');
?>

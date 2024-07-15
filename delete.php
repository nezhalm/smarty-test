<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // la requête SQL pour supprimer le patient
    $sql = "DELETE FROM patient WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->execute([$id]);
        echo json_encode(['status' => 'success', 'message' => 'Data deleted successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare SQL statement!']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method!']);
}
?>
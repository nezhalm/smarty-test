<?php
require 'db.php'; // Assurez-vous que le chemin est correct

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from POST request
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $date_dernier_contact = isset($_POST['date_dernier_contact']) ? $_POST['date_dernier_contact'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $historique = isset($_POST['historique']) ? $_POST['historique'] : '';

    // Debugging: Log data to check if they are correctly retrieved
    error_log("Nom: $nom, Prenom: $prenom, Date Dernier Contact: $date_dernier_contact, Telephone: $telephone, Historique: $historique");

    // Prepare SQL query
    $sql = "INSERT INTO patient (nom, prenom, date_dernier_contact, telephone, historique) VALUES (?, ?, ?, ?, ?)";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $prenom, $date_dernier_contact, $telephone, $historique]);
        echo json_encode(['status' => 'success', 'message' => 'Patient added successfully!']);
    } catch (\PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add patient: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method!']);
}
?>
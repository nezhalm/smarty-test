<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

// Vérifier si les données sont envoyées via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données envoyées par AJAX
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sex'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $date_enregistrement = $_POST['date_enregistrement'];
    $date_dernier_contact = $_POST['date_dernier_contact'];
    $historique = $_POST['historique'];
    $statut = $_POST['statut'];

    // Écrire la requête SQL pour mettre à jour les données du patient
    $sql = "UPDATE patient SET 
                nom = ?, 
                prenom = ?, 
                date_naissance = ?, 
                sexe = ?, 
                adresse = ?, 
                telephone = ?, 
                email = ?, 
                date_enregistrement = ?, 
                date_dernier_contact = ?, 
                historique = ?, 
                statut = ?
            WHERE id = ?";

    // Préparer et exécuter la requête
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('sssssssssssi', 
            $nom, 
            $prenom, 
            $date_naissance, 
            $sexe, 
            $adresse, 
            $telephone, 
            $email, 
            $date_enregistrement, 
            $date_dernier_contact, 
            $historique, 
            $statut, 
            $id);
        
        if ($stmt->execute()) {
            // Répondre avec un message de succès
            echo json_encode(['status' => 'success', 'message' => 'Data updated successfully!']);
        } else {
            // Répondre avec un message d'erreur
            echo json_encode(['status' => 'error', 'message' => 'Failed to update data!']);
        }
        $stmt->close();
    } else {
        // Répondre avec un message d'erreur si la préparation de la requête échoue
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare SQL statement!']);
    }
    $conn->close();
} else {
    // Répondre avec un message d'erreur si la requête n'est pas POST
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method!']);
}
?>
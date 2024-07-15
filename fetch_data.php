<?php
// Inclusion du fichier de connexion à la base de données
require 'db.php';

/**
 * Fonction pour récupérer les données des patients depuis la base de données
 *
 * @return array Un tableau associatif contenant les données des patients
 */
function fetch_data() {
    // Utilisation de la variable globale de connexion
    global $conn;

    // Requête SQL pour sélectionner toutes les données de la table 'patient'
    $sql = 'SELECT * FROM patient';
    
    // Exécution de la requête SQL
    $result = $conn->query($sql);
    
    // Vérification si la requête a échoué
    if ($result === false) {
        // Affichage d'un message d'erreur et arrêt du script en cas d'échec
        die("Query failed: " . $conn->error);
    }

    // Récupération de toutes les lignes de résultat sous forme de tableau associatif
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
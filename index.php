<?php
// require_once '/vendor/smarty/smarty/libs/Smarty.class'; // Ajustez le chemin en fonction de votre installation de Smarty
require 'vendor/autoload.php'; // Chemin vers  de Composer
require 'fetch_data.php'; // Inclure le fichier contenant la fonction fetch_data

$smarty = new \Smarty\Smarty;

// Configuration de Smarty (optionnel)
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs'); // Facultatif
$donnees = fetch_data();
// Set the base URL for assets
$base_url = 'http://localhost:8000'; // Adjust as needed for your setup
$smarty->assign('base_url', $base_url);
$smarty->assign('donnees', $donnees);
$smarty->display('dashboard.tpl');
// Affichage du template hello.tpl
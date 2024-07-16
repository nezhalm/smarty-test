<?php
require 'vendor/autoload.php'; 
require 'fetch_data.php';

$smarty = new \Smarty\Smarty;

// Configuration de Smarty (optionnel)
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs'); // Facultatif
$donnees = fetch_data();
// Set the base URL for assets
$base_url = 'http://localhost:8000'; 
$smarty->assign('base_url', $base_url);
$smarty->assign('donnees', $donnees);
$smarty->display('dashboard.tpl');

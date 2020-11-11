<?php
    // Paramètres de ma page
    define("SITEURL", $_SERVER["HTTP_HOST"]);
    define("SITESTATE", "dev");

    // Paramètres de mon site.
    define("SITETITLE", "Mode");
    define("SITEDESC", "Boutique de vêtements et d'accessoirs.");
    define("SITEOWNER", "Mode - ");
    
    // Section pour la bd
    define("DBTYPE", "mysql");
    define("DBHOST", "localhost");
    define("DBNAME", "mode");
    define("DBUSER", "root");
    define("DBPASS", "");

    // créer un session.
    session_start();
?>
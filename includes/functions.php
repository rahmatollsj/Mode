<?php
    // Il permet de se connecter à la base de donnée.
    function connect_db() {
        // On essaye d'effectuer l'instruction. S’il y a un problème, on lance une exception.
        try{
            $db = new PDO(DBTYPE.':host='.DBHOST.';dbname='.DBNAME.';charset=utf8', DBUSER, DBPASS);
        }
        catch(PDOException $e){
            // On affiche l'exception.
            echo $e;
            // On arrête l'exécution du code PHP.
            die();
        }
        // Retourne la variable qui stocke toutes les données de notre table.
        return $db;
    }

    // Il permet de lire les données de la base de donnée.
    function read_db($db, $tableName) {
        // On accède à tous les colonnes du tableau (le SQL).
        $sql = 'SELECT * FROM `'.$tableName.'`';
        //la requête
        $qry = $db->query($sql);
        //le résultat du recherche.
        $resuts = $qry->fetchAll(); 
        // Retourne le tableau.
        return $resuts;
    }

    function create_account($db, $firstName, $lastName, $date, $country, $email, $username, $password) {
        // On place les données que l'on veut insérer.
        $datas = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'date'=> $date,
            'country'=> $country,
            'email'=> $email,
            'username'=> $username,
            'password'=> $password
        );
        // On prépare la requête.
        $sql = 'INSERT INTO customer (firstName, lastName, date, country, email, username, password) VALUE (:firstName, :lastName, :date, :country, :email, :username, :password)';
        $qry = $db->prepare($sql);
        // On exécute la requête.
        $result = $qry->execute($datas);
        return $result;
    }
?>
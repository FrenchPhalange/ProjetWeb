<?php

class Dal
{
    private $myWPdb;
    public function __construct()
    {
        global $wpdb;
        $this->myWPdb = $wpdb;
    }

    /**
     * creation de la table produit a l'actvation du plugin
     */

    public static function install()
    {
        global $wpdb;
        $query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}barrelfit_membres(" .
            "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY," .
            "nom VARCHAR(150) NOT NULL," .
            "email text NOT NULL," .
            "age int NOT NULL," .
            "taille int NOT NULL," .
            "poid int NOT NULL);";
        $wpdb->query($query);

        $query = "INSERT INTO {$wpdb->prefix}barrelfit_membres VALUES(1,'kevin','kevin@email.com',18,170, 65),(2,'romain','romain@email.com',18,170, 65);";

        $wpdb->query($query);

        $query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}barrelfit_coachs(" .
            "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY," .
            "nom VARCHAR(150) NOT NULL," .
            "email text NOT NULL," .
            "age int NOT NULL);";

        $wpdb->query($query);

        $query = "INSERT INTO {$wpdb->prefix}barrelfit_coachs VALUES(1,'kevin','kevin@email.com',18),(2,'romain','romain@email.com',18);";

        $wpdb->query($query);

        $query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}barrelfit_recettes(" .
            "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY," .
            "plat VARCHAR(150) NOT NULL," .
            "ingredients VARCHAR(150) NOT NULL);";

        $wpdb->query($query);

        $query = "INSERT INTO {$wpdb->prefix}barrelfit_recettes VALUES(1,'plat 1,'pates oeufs'),(2,'plat 2','tomates flocons davoines');";

        $wpdb->query($query);
    }

    public static function uninstall($table)
    {
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}$table;");
    }

    public function findAll($table)
    {
        $res = $this->myWPdb->get_results("SELECT * FROM {$this->myWPdb->prefix}$table;", ARRAY_A);
        return $res;
    }

    // MEMBRE
    public function save($table)
    {
        $test = true;
        if ($table == "barrelfit_recettes") {
            $array_var = ['plat', 'ingredients'];
            echo "teue";
        } else if ($table == "barrelfit_coachs") {

            $array_var = ['nom','email','age'];
        } else {
            $array_var = ['nom', 'age', 'email', 'taille', 'poid'];
        }
        var_dump($array_var);
        $insert = [];
        foreach ($array_var as $key) {
            if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
                $test = false;
            } else {
                $insert[$key] = $_POST[$key];
            }
        }
        if ($test) {
            $row = $this->myWPdb->get_row("select * from {$this->myWPdb->prefix}$table where nom = '" . $insert['nom'] . "';");
            if (is_null($row)) {
                $this->myWPdb->insert("{$this->myWPdb->prefix}$table", $insert);
            } else {
                echo "Ce Membre existe déjà !";
            }
        } else {
            echo "Il y a un problème avec les données";
        }
    }
    public function Delete($id, $table)
    {
        $this->myWPdb->query("DELETE FROM {$this->myWPdb->prefix}$table where id = " . $id . "");
    }
}

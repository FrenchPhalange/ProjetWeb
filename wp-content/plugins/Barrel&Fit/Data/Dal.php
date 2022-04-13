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
        $query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}barrelfit(" .
            "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY," .
            "nom VARCHAR(150) NOT NULL," .
            "email text NOT NULL," .
            "age int NOT NULL," .
            "taille int NOT NULL," .
            "poid int NOT NULL);";
        $wpdb->query($query);
        $query = "INSERT INTO {$wpdb->prefix}barrelfit VALUES(1,'kevin','kevin@email.com',18,170, 65)";
        $wpdb->query($query);
    }

    public static function uninstall()
    {
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}barrelfit;");
    }

    public function findAll()
    {
        $res = $this->myWPdb->get_results("SELECT * FROM {$this->myWPdb->prefix}barrelfit;", ARRAY_A);
        return $res;
    }

    public function saveMembre()
    {
        $test = true;
        $array_var = ['nom', 'prix', 'age', 'taille', 'poid'];
        $insert = [];
        foreach ($array_var as $key) {
            if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
                $test = false;
            } else {
                $insert[$key] = $_POST[$key];
            }
        }
        if ($test) {
            $row = $this->myWPdb->get_row("select * from {$this->myWPdb->prefix}barrelfit where nom = '" . $insert['nom'] . "';");
            if (is_null($row)) {
                $this->myWPdb->insert("{$this->myWPdb->prefix}barrelfit", $insert);
            } else {
                echo "Ce Membre existe déjà !";
            }
        } else {
            echo "Il y a un problème avec les données";
        }
    }
    public function DeleteMembre($id)
    {
        $this->myWPdb->query("DELETE FROM {$this->myWPdb->prefix}barrelfit where id = ". $id ."");
    }    
    public function saveCoach()
    {
        $test = true;
        $array_var = ['nom', 'prix', 'age', 'taille', 'poid'];
        $insert = [];
        foreach ($array_var as $key) {
            if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
                $test = false;
            } else {
                $insert[$key] = $_POST[$key];
            }
        }
        if ($test) {
            $row = $this->myWPdb->get_row("select * from {$this->myWPdb->prefix}barrelfit where nom = '" . $insert['nom'] . "';");
            if (is_null($row)) {
                $this->myWPdb->insert("{$this->myWPdb->prefix}barrelfit", $insert);
            } else {
                echo "Ce Membre existe déjà !";
            }
        } else {
            echo "Il y a un problème avec les données";
        }
    }
    public function DeleteCoach($id)
    {
        $this->myWPdb->query("DELETE FROM {$this->myWPdb->prefix}barrelfit where id = ". $id ."");
    }
}

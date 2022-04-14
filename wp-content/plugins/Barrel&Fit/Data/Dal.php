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

        $query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}barrelfit_recettes(" .
            "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY," .
            "plat VARCHAR(150) NOT NULL," .
            "ingredients VARCHAR(255) NOT NULL);";

        $wpdb->query($query);
    }

    public static function uninstall()
    {
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}barrelfit_recettes;");
    }

    public function findAll()
    {
        $res = $this->myWPdb->get_results("SELECT * FROM {$this->myWPdb->prefix}barrelfit_recettes;", ARRAY_A);
        return $res;
    }

    // MEMBRE
    public function save()
    {
        $test = true;
            $array_var = ['plat','ingredients'];
        $insert = [];
        foreach ($array_var as $key) {
            if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
                $test = false;
            } else {
                $insert[$key] = $_POST[$key];
            }
        }
        if ($test) {
            $row = $this->myWPdb->get_row("select * from {$this->myWPdb->prefix}barrelfit_recettes where nom = '" . $insert['nom'] . "';");
            if (is_null($row)) {
                $this->myWPdb->insert("{$this->myWPdb->prefix}barrelfit_recettes", $insert);
            } else {
                echo "Ce Membre existe déjà !";
            }
        } else {
            echo "Il y a un problème avec les données";
        }
    }
    public function Delete($id)
    {
        $this->myWPdb->query("DELETE FROM {$this->myWPdb->prefix}barrelfit_recettes where id = " . $id . "");
    }

}

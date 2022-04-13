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
        $query = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}burgerhouse(" .
            "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY," .
            "nom VARCHAR(150) NOT NULL," .
            "prix float(10) NOT NULL," .
            "ingredient TEXT NOT NULL);";
        $wpdb->query($query);
        $query = "INSERT INTO {$wpdb->prefix}burgerhouse VALUES(1,'McFish',4.95,'tomates,poissons,pain,cornichons,laitue'),(2,'McChicken',4.95,'tomates,poulet,pain,cornichons,laitue'),(3,'McBoeuf',4.95,'tomates,boeuf,pain,cornichons,laitue')";
        $wpdb->query($query);
    }

    public static function uninstall()
    {
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}burgerhouse;");
    }

    public function findAll()
    {
        $res = $this->myWPdb->get_results("SELECT * FROM {$this->myWPdb->prefix}burgerhouse;", ARRAY_A);
        return $res;
    }

    public function saveBurger()
    {
        $test = true;
        $array_var = ['nom', 'prix', 'ingredient'];
        $insert = [];
        foreach ($array_var as $key) {
            if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
                $test = false;
            } else {
                $insert[$key] = $_POST[$key];
            }
        }
        if ($test) {
            $row = $this->myWPdb->get_row("select * from {$this->myWPdb->prefix}burgerhouse where nom = '" . $insert['nom'] . "';");
            if (is_null($row)) {
                $this->myWPdb->insert("{$this->myWPdb->prefix}burgerhouse", $insert);
            } else {
                echo "Ce burger existe déjà !";
            }
        } else {
            echo "Il y a un problème avec les données";
        }
    }
    public function DeleteBurger($id)
    {
        $this->myWPdb->query("DELETE FROM {$this->myWPdb->prefix}burgerhouse where id = ". $id ."");
    }
}

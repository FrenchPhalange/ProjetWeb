<?php

/**
 * Plugin Name: Barrel & Fit
 * Description: Barrel & Fit (gestion des membres, des coachs et des recettes)
 * Author: ProjetPro
 * Version: 1.0
 */

require plugin_dir_path(__FILE__) . '/Widgets/WP_Widget_Weather.php';
require plugin_dir_path(__FILE__) . '/Widgets/WP_Widget_Promo.php';
require plugin_dir_path(__FILE__) . '/Data/Dal.php';


class MonPlugin
{
    public function __construct()
    {
        new Dal();
        register_activation_hook(__FILE__, array('Dal', 'install'));

        #register_deactivation_hook(__FILE__ , array('Dal', 'uninstall'));

        register_uninstall_hook(__FILE__, array('Dal', 'uninstall'));

        add_action('widgets_init', function () {

            register_widget('WP_Widget_Weather');
            register_widget('WP_Widget_Promo');
        });

        add_action('wp_enqueue_scripts', array($this, 'plugin_scripts'));

        add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));

        add_action('admin_menu', array($this, 'add_menu_back'));
    }

    /* fron office scripts */
    public function plugin_scripts()
    {
        wp_enqueue_style('style', '', [], 1.0);
        wp_enqueue_script('script', '', [], 1.0, true);
    }
    /* back office scripts */
    public function admin_scripts()
    {
        wp_enqueue_style('style', '', [], 1.0);
        wp_enqueue_script('script', '', [], 1.0, true);
    }

    public function add_menu_back()
    {
        $menu = add_menu_page('La gestion globale', "Gestion des recettes", "manage_options", "Gestion des recettes", array($this, 'recettesPage'), "dashicons-buddicons-community", 40);
        add_submenu_page('Gestion', "Gestion des Recettes", "Gestion des Recettes", "manage_options", "Gestion des recettes", array($this, 'recettesPage'));
    }
    public function recettesPage()
    {
        $dal = new Dal();
        $page = $_REQUEST['page'];
        echo  "<h2>" . $page . "</h2>";
        if (isset($_POST['plat']) && !empty($_POST['plat'])) {
            $dal->save("barrelfit_recettes");
        }

?>
        <table class="widefat fixed" cellspacing="0">
            <tr>
                <th class="manage-column column-columnname">ID</th>
                <th class="manage-column column-columnname">Images</th>
                <th class="manage-column column-columnname">Plats</th>
                <th class="manage-column column-columnname">Ingredients</th>
                <th class="manage-column column-columnname">Supprimer</th>
            </tr>
            <?php
            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                $dal->Delete($id, "barrelfit_recettes");
            }
            foreach ($dal->findAll("barrelfit_recettes") as $line) {
                $url = "https://www.themealdb.com/api/json/v1/1/search.php?s=". $line['plat'] ."";

                $url = file_get_contents($url);

                $url = json_decode($url, true);
            ?>
                <tr>
                    <td><?= $line['id'] ?></td>
                    <td><img width='150px' src='<?php echo $url['meals'][0]['strMealThumb'] ?>'></td>
                    <td><?= $line['plat'] ?></td>
                    <td><?= $line['ingredients'] ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $line['id'] ?>">
                            <button type="submit" name="delete" class="delete"><span class="dashicons dashicons-no-alt"></span></button>
                        </form>
                    </td>
                </tr>
            <?php
            }

            ?>
        </table>

        <form action="" method="post" class="">
            <div class="field_add">
                <label class="label_field_add" for="plat">Nom du plat</label>
                <input type="text" name="plat" id="plat">
            </div>

            <div class="field_add">
                <label class="label_field_add" for="ingredients">Ingredients</label>
                <textarea name="ingredients" id="ingredients" cols="30" rows="10"></textarea>
            </div>

            <div class="field_add">
                <input type="hidden" name="page" value="Gestion des Recettes">
                <input class="button_submit_add" type="submit" value="Enregister">
            </div>
        </form>
        </div>
        <style>
            div.field_add {
                display: flex;
                flex-direction: column;
                margin: 10px 0;
                justify-content: center;
                align-items: center;
            }

            .delete-plugin {
                background-color: red;
                border: none;
                color: white;
            }

            .delete:hover {
                opacity: 0.8;
            }

            table,
            th,
            tr,
            td {
                text-align: center !important;
            }
        </style>
<?php
    }
}
?>
<?php
new MonPlugin();

?>
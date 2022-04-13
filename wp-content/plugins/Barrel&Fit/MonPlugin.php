<?php

/**
 * Plugin Name: Barrel & Fit
 * Description: Barrel & Fit (gestion des membres)
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
        $menu = add_menu_page('Les membres', "Gestion", "manage_options", "gestion", array($this, 'membrePage'), "dashicons-admin-tools", 45);
        add_submenu_page('gestion', "Gestion des membres", "Gestion des Membres", "manage_options", "addMembre", array($this, 'membrePage'));
        add_submenu_page('gestion', "Gestion des coachs", "Gestion des Coachs", "manage_options", "addCoach", array($this, 'coachPage'));
    }

    public function membrePage()
    {
        $dal = new Dal();
        $page = $_REQUEST['page'];
?>
        <div class="wrap">
            <h3>Les membres de Barrel & Fit</h3>
            <h4>Nous sommes sur la page <?= $page ?></h4>
            <?php

            switch ($page) {
                    /* Membre */
                case 'gestion':
                    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
                        $dal->saveMembre();
                    }
            ?>
                    <table class="widefat fixed" cellspacing="0">
                        <tr>
                            <th class="manage-column column-columnname">ID</th>
                            <th class="manage-column column-columnname">Nom</th>
                            <th class="manage-column column-columnname">Email</th>
                            <th class="manage-column column-columnname">Age</th>
                            <th class="manage-column column-columnname">Taille</th>
                            <th class="manage-column column-columnname">Poid</th>
                            <th class="manage-column column-columnname">Supprimer</th>
                        </tr>
                        <?php
                        if (isset($_POST['delete'])) {
                            $id = $_POST['id'];
                            $dal->DeleteMembre($id);
                        }
                        foreach ($dal->findAll() as $line) {
                        ?>
                            <tr>
                                <td><?= $line['id'] ?></td>
                                <td><?= $line['nom'] ?></td>
                                <td><?= $line['email'] ?></td>
                                <td><?= $line['age'] ?></td>
                                <td><?= $line['taille'] ?></td>
                                <td><?= $line['poid'] ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $line['id'] ?>">
                                        <button type="submit" name="delete" class="delete"><span class="dashicons dashicons-no-alt"></span></button>
                                    </form>
                                </td>
                            </tr>
                            <style>
                                .delete {
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

                        ?>
                    </table>
                <?php
                    break;

                    /* ADD Burger */
                case 'addMembre':
                ?>

                    <form action="" method="post" class="">
                        <div class="field_add">
                            <label class="label_field_add" for="nom">Nom du membre</label>
                            <input type="text" name="nom" id="nom">
                        </div>
                        <div class="field_add">
                            <label class="label_field_add" for="prix">Prix</label>
                            <input type="text" name="prix" id="prix">
                        </div>
                        <div class="field_add">
                            <label class="label_field_add" for="ingredient">Ingredient</label>
                            <textarea name="ingredient" id="ingredient" cols="40" rows="5"></textarea>
                        </div>

                        <div class="field_add">
                            <input type="hidden" name="page" value="membre">
                            <input class="button_submit_add" type="submit" value="Enregister">
                        </div>
                    </form>
                    <style>
                    </style>

            <?php
                    break;
            }

            ?>
        </div>
<?php
    }
    public function coachPage()
    {
        $dal = new Dal();
        $page = $_REQUEST['page'];
?>
        <div class="wrap">
            <h3>Les coachs de Barrel & Fit</h3>
            <h4>Nous sommes sur la page <?= $page ?></h4>
            <?php

            switch ($page) {
                    /* Membre */
                case 'gestion':
                    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
                        $dal->saveCoach();
                    }
            ?>
                    <table class="widefat fixed" cellspacing="0">
                        <tr>
                            <th class="manage-column column-columnname">ID</th>
                            <th class="manage-column column-columnname">Nom</th>
                            <th class="manage-column column-columnname">Prix</th>
                            <th class="manage-column column-columnname">Ingredients</th>
                            <th class="manage-column column-columnname">Supprimer</th>
                        </tr>
                        <?php
                        if (isset($_POST['delete'])) {
                            $id = $_POST['id'];
                            $dal->DeleteCoach($id);
                        }
                        foreach ($dal->findAll() as $line) {
                        ?>
                            <tr>
                                <td><?= $line['id'] ?></td>
                                <td><?= $line['nom'] ?></td>
                                <td><?= $line['prix'] ?>€</td>
                                <td><?= $line['ingredient'] ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $line['id'] ?>">
                                        <button type="submit" name="delete" class="delete"><span class="dashicons dashicons-no-alt"></span></button>
                                    </form>
                                </td>
                            </tr>
                            <style>
                                .delete {
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

                        ?>
                    </table>
                <?php
                    break;

                    /* ADD Burger */
                case 'addCoach':
                ?>

                    <form action="" method="post" class="">
                        <div class="field_add">
                            <label class="label_field_add" for="nom">Nom du membre</label>
                            <input type="text" name="nom" id="nom">
                        </div>
                        <div class="field_add">
                            <label class="label_field_add" for="prix">Prix</label>
                            <input type="text" name="prix" id="prix">
                        </div>
                        <div class="field_add">
                            <label class="label_field_add" for="ingredient">Ingredient</label>
                            <textarea name="ingredient" id="ingredient" cols="40" rows="5"></textarea>
                        </div>

                        <div class="field_add">
                            <input type="hidden" name="page" value="membre">
                            <input class="button_submit_add" type="submit" value="Enregister">
                        </div>
                    </form>
                    <style>
                    </style>

            <?php
                    break;
            }

            ?>
        </div>
<?php
    }
}

new MonPlugin();

?>
<?php 

function RegisterMenu()
{
    register_nav_menus(
        array(
            'menu-sup' => __('Menu Superieur'),
        )
    );
}
add_action('init', 'RegisterMenu');



/* CLASS RECONSTRUCTION DU MENU */
class projetpro_walker extends Walker_Nav_Menu
{
    function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $title = $data_object->post_title;
        $description = $data_object->post_excerpt;
        $permalink = $data_object->url;

        $output .= "<li class='nav-item'>";
        if ($permalink && $permalink != '#') {
            $output .= "<a href='" . $permalink . "' class='nav-link'";
        } else {
            $output .= "<span>";
        }

        $output .= $title;

        if ($description != '' && $depth == 0) {
            $output .= "<small class='description'>" . $description . "</small>";
        }

        if ($permalink && $permalink != '#') {
            $output .= "</a>";
        } else {
            $output .= "</span>";
        }

        $output .= "</li>";
    }
}


?>
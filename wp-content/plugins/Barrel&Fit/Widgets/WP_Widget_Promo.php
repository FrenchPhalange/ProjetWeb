<?php
/* WIDGET */

class WP_Widget_Promo extends WP_Widget
{
    private $burgerpromo = [];


    /**
     * CONSTRUCT
     */
    public function __construct()
    {
        $widget_opt = [
            'className' => 'WP_Widget_Promo',
            'description' => __('promo aléatoire pour un burger'),
            'customize_selective_refresh' => true,
        ];
        parent::__construct('promo_widget', __('promo widget'), $widget_opt);
    }

    public function widget($args, $instance)
    {
        $dal = new Dal;
        foreach ($dal->findAll() as $line) {
            array_push($this->burgerpromo,$line['nom']);
        }
        shuffle($this->burgerpromo);
        $title = "Burger en promotion";
        echo $args['before_widget'];
        echo $args['before_title'] . $title . $args['after_title'];
        echo "<div> -" . random_int(10, 50) . ' % sur le ' . $this->burgerpromo[0] ." </div>";
        echo $args['after_widget'];
    }
}
?>
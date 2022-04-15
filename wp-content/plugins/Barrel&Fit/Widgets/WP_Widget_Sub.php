<?php
/* WIDGET */

class WP_Widget_Sub extends WP_Widget
{
    private $burgerpromo = [];


    /**
     * CONSTRUCT
     */
    public function __construct()
    {
        $widget_opt = [
            'className' => 'WP_Widget_Sub',
            'description' => __('sub aléatoire pour un burger'),
            'customize_selective_refresh' => true,
        ];
        parent::__construct('sub_widget', __('sub widget'), $widget_opt);
    }
    /**
     * FORM
     *
     * @param [type] $instance
     * @return void
     */
    public function form($instance)
    {
        $instance = wp_parse_args(array(), $instance, ['apikey' => '', 'cityname' => '']);
?>


    <?php
    }
    public function widget($args, $instance)
    {
        $dal = new Dal;
        foreach ($dal->findAll() as $line) {
            array_push($this->burgerpromo, $line['nom']);
        }
        ?>
        <div class="widget-member-add">
        <?php
        shuffle($this->burgerpromo);
        $title = "<h1>Prendre Rendez-vous avec un coach</h1>";
        echo $args['before_widget'];
        echo $args['before_title'] . $title . $args['after_title'];
        ?>

            <form action="" method="POST">
                <input name="name" type="text" placeholder="Entrez votre nom et prenom">
                <select name="activity" id="">
                    <option value="piscine">Piscine</option>
                    <option value="fitness">Fitness</option>
                    <option value="machines">Machines</option>
                </select>
                <button name="submit-member-add" value="true">S'inscrire</button>
            </form>
        </div>
<?php
        echo $args['after_widget'];
    }

}


?>
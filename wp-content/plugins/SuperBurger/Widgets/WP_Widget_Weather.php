<?php

/* WEATHER WIDGET */
class WP_Widget_Weather extends WP_Widget{
    /**
     * CONSTRUCT
     */
    public function __construct()
    {
        $widget_opt = [
            'className' => 'WP_Widget_Weather',
            'description' => __('météo'),
            'customize_selective_refresh' => true,
        ];
        parent::__construct('weather', __('Weather Widget'), $widget_opt);
    }

    /**
     * FORM
     *
     * @param [type] $instance
     * @return void
     */
    public function form($instance)
    {
        $instance = wp_parse_args(array(), $instance, ['apikey' => '','cityname' => '']);
?>
       <p>
           <label for="<?= $this->get_field_id('apikey'); ?>"><?php _e('Cle d\'acces API OpenWeather'); ?></label>
           <input type="text" id="<?= $this->get_field_id('apikey'); ?>" name="<?= $this->get_field_name('apikey');?>" value="<?= $instance['apikey'] ?>">           
           
           <label for="<?= $this->get_field_id('cityname'); ?>"><?php _e('city name') ?></label>
           <input type="text" id="<?= $this->get_field_id('cityname'); ?>" name="<?= $this->get_field_name('cityname'); ?>" value="<?= $instance['cityname'] ?>">        
       </p>

<?php
    }

    /**
     * UPDATE
     *
     * @param [type] $new_instance
     * @param [type] $old_instance
     * @return void
     */
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['apikey'] = sanitize_text_field($new_instance['apikey']);
        $instance['cityname'] = sanitize_text_field($new_instance['cityname']);
        return $instance;
    }

    public function widget($args, $instance)
    {
        $title = "Le Temps";    
        $url = "https://api.openweathermap.org/data/2.5/weather?q=".$instance['cityname']."&appid=".$instance['apikey']."";
        $request = wp_remote_get($url);
        if(is_wp_error($request)){
            return false;
        }
        $body = wp_remote_retrieve_body($request);

        $datas = json_decode($body, true);

        echo $args['before_widget'];
        echo $args['before_title'] . $title . $args['after_title'];
        echo "<div>";
        if(!empty($datas)){
?>                
            <h5><?= $datas['name'] ?></h5>
            <h6><?= $datas['main']['temp'] - 273,15 . ' °C' ?></h6>
            <img src="http://openweathermap.org/img/wn/<?= $datas['weather'][0]['icon']?>.png";
<?php
        } 
        echo "</div>";
        echo $args['after_widget'];
    }
}
?>
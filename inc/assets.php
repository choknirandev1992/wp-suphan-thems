<?php 

class Assets{

    function __construct() {
        add_action('wp_enqueue_scripts', array($this,'suphan_style'));
    }
      
    public function suphan_style() {
        wp_enqueue_style( 'themes-style', get_template_directory_uri() . '/assets/css/themes.css');
    }
}

$assets = new Assets();
?>
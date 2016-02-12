<?php 

if(! function_exists( 'missdrepants_enqueue_styles' ) ) {

    function missdrepants_enqueue_styles() {
        $parent_style = 'ebor-style';
        $icon_fonts = 'ebor-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'missdrepants-style',
            trailingslashit( get_stylesheet_directory_uri() ) . 'assets/styles/style.min.css',
            array( $parent_style )
        );
    }

    add_action( 'wp_enqueue_scripts', 'missdrepants_enqueue_styles' );

}

?>
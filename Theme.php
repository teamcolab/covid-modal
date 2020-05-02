<?php

namespace ColabCovidModal;

class Theme {

    public static function wp_enqueue_scripts() {
        $dist_uri = plugin_dir_url( __FILE__ ) . 'dist';

        wp_enqueue_style( 'slider', $dist_uri . '/css/modal.css',false,'1.1','all');

        wp_register_script( 'microModal', 'https://unpkg.com/micromodal/dist/micromodal.min.js', null, null, true );
        wp_enqueue_script('microModal');

        wp_register_script( 'jsCookie', 'https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js', null, null, true );
        wp_enqueue_script('jsCookie');

        wp_enqueue_script( 'covid_modal', $dist_uri . '/js/modal.js', ['microModal', 'jsCookie'], 1.1, true);
    }

}
<?php

namespace ColabCovidModal;

class Theme {

    public static function wp_enqueue_scripts() {

        $enabled = get_option('modal_enabled');

        if ($enabled) {
            $dist_uri = plugin_dir_url(__FILE__) . 'dist';

            // enqueue a list of styles in array_order~
            $covid_modal_stylesheets = apply_filters('covid_modal_stylesheet', [$dist_uri . '/css/modal.css']);
            foreach ($covid_modal_stylesheets as $key => $covid_modal_stylesheet) {
                wp_enqueue_style('style-emergency-alert-modal-' . $key, $covid_modal_stylesheet, false, '1.0', 'all');
            }


            wp_enqueue_script('microModal', $dist_uri . '/js/micromodal.min.js', null, '0.4.6', true);
            wp_enqueue_script('jsCookie', $dist_uri . '/js/js.cookie.min.js', null, 'v3.0.0-rc.0', true);
            wp_enqueue_script('covid_modal', $dist_uri . '/js/modal.js', ['microModal', 'jsCookie'], '1.1', true);
        }
    }

    public static function render_covid_modal() {
        $modalData = [
            'modal_title' => get_option('modal_title'),
            'modal_content' => get_option('modal_content'),
            'cta_link_url' => get_option('cta_link_url'),
            'cta_link_text' => get_option('cta_link_text')
        ];

        ob_start();
        include('templates/modal_template.php');
        $buffered_content = ob_get_contents();
        ob_end_clean();

        return apply_filters('covid_modal_template', $buffered_content, $modalData);
    }
}
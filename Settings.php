<?php

namespace ColabCovidModal;

class Settings {

    public static function admin_init() {
        $default_content  = '<p>COLAB has your back. We are open for business.</p>';
        $default_content .= '<p><a href="/covid-19-operations-plan/">View our COVID-19 operations plan.</a></p>';

        add_option('modal_content', $default_content);
        register_setting('covid_modal', 'modal_content');
    }

    public static function admin_menu() {
        add_options_page(
            'Covid Modal Options',
            'Covid Modal',
            'manage_options',
            'covid-modal',
            ['ColabCovidModal\Settings', 'options_page']
        );
    }

    public static function options_page()
    {
        //content on page goes here
        include('templates/options_page.php');
    }
}
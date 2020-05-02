<?php

namespace ColabCovidModal;

class Settings {

    public static function admin_init() {

        $default_modal_title = 'COVID-19 Update';

        $default_content  = '<p>COLAB has your back. We are open for business.</p>';
        $default_content .= '<p><a href="/covid-19-operations-plan/">View our COVID-19 operations plan.</a></p>';

        $default_cta_link_url = '/covid-19-operations-plan/';
        $default_cta_link_text = 'Read More on COVID-19';

        add_option('modal_title', $default_modal_title);
        register_setting('covid_modal', 'modal_title');

        add_option('modal_content', $default_content);
        register_setting('covid_modal', 'modal_content');

        add_option('cta_link_url', $default_cta_link_url);
        register_setting('covid_modal', 'cta_link_url');

        add_option('cta_link_text', $default_cta_link_text);
        register_setting('covid_modal', 'cta_link_text');
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
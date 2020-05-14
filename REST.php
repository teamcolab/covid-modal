<?php


namespace ColabCovidModal;


class REST {

    public static function register_rest_routes() {
        register_rest_route(
            'covid-modal/v1',
            '/content',
            [
                'methods' => 'GET',
                'callback' => ['ColabCovidModal\REST', 'modal_content'],
            ]
        );

        register_rest_route(
            'covid-modal/v1',
            '/variables',
            [
                'methods' => 'GET',
                'callback' => ['ColabCovidModal\REST', 'modal_variables'],
            ]
        );
    }

    public static function modal_content() {
        return Theme::render_covid_modal();
    }

    public static function modal_variables() {
        return [
            'modal_title' => get_option('modal_title'),
            'modal_content' => get_option('modal_content'),
            'cta_link_url' => get_option('cta_link_url'),
            'cta_link_text' => get_option('cta_link_text')
        ];
    }

}
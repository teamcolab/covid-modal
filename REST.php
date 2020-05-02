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
    }

    public static function modal_content() {
        return [
            'modal_title' => get_option('modal_title'),
            'modal_content' => get_option('modal_content'),
            'cta_link_url' => get_option('cta_link_url'),
            'cta_link_text' => get_option('cta_link_text')
        ];
    }

}
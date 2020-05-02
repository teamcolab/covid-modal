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
        return get_option('modal_content');
    }

}
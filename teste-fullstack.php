<?php /*
* Plugin Name: Teste Fullstack CNN
* Plugin URI: https://github.com/alexvickers/teste-fullstack
* Author: Alexandre Aimbiré
* Author URI: https://github.com/alexvickers
*/

define ('HOURS', 60 * 60);

function loteria_plugin() {

    global $apiInfo;
    if(empty($apiInfo)) $apiInfo = get_transient('apiInfo');
    if(!empty($apiInfo)) return $apiInfo;

    $response = wp_remote_get('https://loteriascaixa-api.herokuapp.com/api');
    $data = wp_remote_retrieve_body($response);

    if(empty($data)) return false;

    $apiInfo = json_decode(($data));
    set_transient('api_info', $apiInfo, 12 * HOURS);

    var_dump($apiInfo);

}

add_shortcode('teste_api', 'loteria_plugin');

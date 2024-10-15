<?php /*
* Plugin Name: Teste Fullstack CNN
* Plugin URI: https://github.com/alexvickers/teste-fullstack
* Author: Alexandre Aimbiré
* Author URI: https://github.com/alexvickers
*/

function loteria_plugin() {

    $fetch_api = wp_remote_get('https://loteriascaixa-api.herokuapp.com/api');

    var_dump($fetch_api);

}

add_shortcode('teste_api', 'loteria_plugin');

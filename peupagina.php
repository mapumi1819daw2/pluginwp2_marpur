<?php

/*
Plugin Name: Peu de pàgina per defecte per a noves entrades
Plugin URI: https://github.com/mapumi1819daw2/pluginwp2_marpur.git
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author: Marc Purgimon i Milián
Author URI: https://github.com/mapumi1819daw2
License: GNU GPLv3
*/

function funcio_peupagina($atr,$text) {
	return '<a>Peu de pàgina</a>';
}

add_shortcode('peupagina', 'funcio_peupagina');

?>

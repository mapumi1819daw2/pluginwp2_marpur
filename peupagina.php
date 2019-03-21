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

function peu_pagina_per_defecte($atr,$text) {
	return '<a>Peu de pàgina</a>';
}

add_shortcode('peupagina', 'peu_pagina_per_defecte');

function admin_menu_peu_pagina(){
	$titolPagina="Peu de pàgina per defecte";
	$titolEntrada="Peu de pàgina per defecte";
	$role="administrator";
	$id="peu_pagina_per_defecte";
	$nom_funcio="nouPeuPagDef";
	add_menu_page($titolPagina,$titolEntrada,$role,$id, $nom_funcio);
	}

	function nouPeuPagDef(){
		include_once('formPeuPagina.php');
		}

	add_action('admin_menu','admin_menu_peu_pagina');





?>

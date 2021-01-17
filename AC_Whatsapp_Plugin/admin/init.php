<?php

// ADMIN SCRIPT TO SAVE POST
function ac_zap_adm_enqueue_scripts(){

	// REGISTRA OS ARQUIVOS A INCLUIR
	wp_register_script(
		'ac_zap_jquery',
		AC_ZAP_PATH."includes/scripts/jquery.rateit.min.js",
		array('jquery'),
		'2.0',
		true
	);

	wp_register_script(
		'ac_zap_script',
		AC_ZAP_PATH."includes/scripts/script.js",
		array('jquery'),
		'2.2',
		true
	);

	wp_localize_script('ac_zap_script', 'ac_zap_objeto', array(
		'ac_post_url' => AC_ZAP_PATH."includes/functions.php"
	));

	// INSERE CSS E JQUERY A PAGINA 
	wp_enqueue_script('ac_zap_jquery');
	wp_enqueue_script('ac_zap_script');
}

// ADMIN PAGE
function ac_zap_admin_zap(){

	// CONFIG FILE (DATABASE)
	$ac_zap_config = json_decode(file_get_contents(AC_ZAP_PATH.'config.json'), true);
	
	include_once('includes/page-config.php');
}
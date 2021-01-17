<?php

// INSET THE BUTTON
function wc_function_zap() {

	// CONFIG FILE
	$config = json_decode(file_get_contents(AC_ZAP_PATH.'config.json'), true);
	$config = !empty($config['data']) ? $config['data'] : 0;

	// REPLACE TO SHOW
	$subject = file_get_contents( AC_ZAP_PATH.'botao.html' );
	$search	 = array('{_[AC:URL]_}','{_[AC:BGD]_}','{_[AC:HOU]_}','{_[AC:NUM]_}',);
	$replace = array(AC_ZAP_PATH, $config['color_01'], $config['color_02'], $config['area_code']."".$config['number']);
	$btn = str_replace($search, $replace, $subject);

	// Show
	echo($btn);
}

// SUBMENU CONFIGURAÇÕES
function ac_zap_config() {
	add_menu_page( 'Meu Whatsapp', 'Meu Whatsapp', 'manage_options', 'ac_whatsapp_poup', 'ac_zap_admin_zap', AC_ZAP_PATH.'/includes/img/wpp-icon.svg');
}

// SAVE CONFIG
function ac_zap_save_config($url_1, $url_2, $active, $color_01, $color_02, $area_code, $number, $language){

	// CONFIG FILE (DATABASE)
	$ac_zap_config = json_decode(file_get_contents($url_1.'config.json'), true);

	// Dir basead in the root 
	$dir = explode('/', $url_1);
	$dir = array_filter($dir, function($value) {
	  return !empty($value) || $value === 0;
	});
	$dir = end($dir);

	$array = array('status' => 1);
	$ac_new_json = array(
		"name" => "Whatsapp Botão Flutuante",
		"version" => "2.0.0",
		"created_by" => "Alisson Custodio",
		"created_url" => "www.alissonoportifolio.com",
		"data" => array(
				"active"    => $active,
				"color_01"  => $color_01,
				"color_02"  => $color_02,
				"area_code" => $area_code,
				"number"    => $number,
				"language"  => $language
			)
	);

	$json_editado = file_put_contents($url_2."/".$dir.'/config.json',json_encode($ac_new_json));

	return 2;
}

if( isset($_POST['action']) && $_POST['action'] === "ac_save_config" ) {
	echo ac_zap_save_config( $_POST['url_1'],  $_POST['url_2'],  $_POST['txt_5'], $_POST['txt_3'], $_POST['txt_4'], $_POST['txt_1'], $_POST['txt_2'], $_POST['txt_6'] );
} 
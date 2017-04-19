<?php 
function encode_email($e) {
$output = '';
	for ($i = 0; $i < strlen($e); $i++) { $output .= '&#'.ord($e[$i]).';'; }
	return $output;
}

function getUserLanguage() { 
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	return $idioma; 
} 

function t($texto,$idioma = 'es')
{
	$cl = getUserLanguage();
	if($idioma <> $cl)
		$texto = getTranslatedText($texto);
	
	return $texto;
}

function getTranslatedText($text)
{
	$idioma = getUserLanguage();
	$path = dirname(__FILE__).'/languages/'.$idioma.'.php';
	if(file_exists($path)):
		$translations = require($path);
		$translations = array_key_exists($text,$translations) ? $translations[$text] : $text;
	else: 
		$translations = $text;
	endif;
	
	return $translations;
} 
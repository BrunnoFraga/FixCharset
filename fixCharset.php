<?php

function fixCharset($text)
{
	$char = array(	

		"&Agrave;" => "À",
		"&agrave;" => "à",
		"&Aacute;" => "Á",
		"&aacute;" => "á",
		"&Acirc;" => "Â",
		"&acirc;" => "â",	
		"&Atilde;" => "Ã",
		"&atilde;" => "ã",
		"&Ccedil;" => "Ç",
		"&ccedil;" => "ç",	
		"&Egrave;" => "È",
		"&egrave;" => "è",
		"&Eacute;" => "É",
		"&eacute;" => "é",	
		"&Ecirc;" => "Ê",
		"&ecirc;" => "ê",
		"&Igrave;" => "Ì",	
		"&igrave;" => "ì",
		"&Iacute;" => "Í",
		"&iacute;" => "í",	
		"&Iuml;" => "Ï",
		"&iuml;" => "ï",	
		"&Ograve;" => "Ò",
		"&ograve;" => "ò",
		"&Oacute;" => "Ó",	
		"&oacute;" => "ó",
		"&Otilde;" => "Õ",	
		"&otilde;" => "õ",	
		"&Ugrave;" => "Ù",	
		"&ugrave;" => "ù",	
		"&Uacute;" => "Ú",
		"&uacute;" => "ú",
		"&Uuml;" => "Ü",
		"&uuml;" => "ü",
		"&ordf;" => "ª",
		"&ordm;" => "º"

	);


	foreach ($char as $key => $value)
	{
		$text = str_replace($key, $value, $text);	
	}

	return $text;
}


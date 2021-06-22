<?php

//ajout redirection langues
$supportedLangs = array('en-GB', 'fr', 'de','es','it','de','cn','bg','hr','cs','da','nl','el','pt','ru','sr','en',"en-US", "fr", "fr-FR", "es-ES","de-de");
$languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
foreach($languages as $lang)
{
if(in_array($lang, $supportedLangs))
{
                // Set the page locale to the first supported language found

@header("Location:www_data/index.php#googtrans(fr|".$lang.")");


}
}
$lang1="de";
@header("Location:www_data/index.php#googtrans(fr|".$lang1.")");


?>
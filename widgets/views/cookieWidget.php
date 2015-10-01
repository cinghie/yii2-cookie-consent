<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 1.4.0
*/

use cinghie\cookieconsent\assets\CookieAsset;

// Load Articles Assets
CookieAsset::register($this);
$asset = $this->assetBundles['cinghie\cookieconsent\assets\CookieAsset'];

// Create codeJS
$codeJS = "window.cookieconsent_options = { message: '{$message}', dismiss: '{$dismiss}', learnMore: '{$learnMore}', link: '{$link}', theme: '{$theme}', container: '{$container}', path: '{$path}',";
if($domain){
    $codeJS .= " domain: '{$domain}',";
}
$codeJS .= " expiryDays: {$expiryDays} };";

$this->registerJs($codeJS);

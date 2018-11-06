<?php

/**
 * @var string $container
 * @var string $dismiss
 * @var string $domain
 * @var string $expiryDays
 * @var string $learnMore
 * @var string $link
 * @var string $message
 * @var string $theme
 */

use cinghie\cookieconsent\assets\CookieAsset;

// Load Articles Assets
CookieAsset::register($this);
$asset = $this->assetBundles[CookieAsset::class];

// Create codeJS
$codeJS = "window.cookieconsent_options = { message: '{$message}', dismiss: '{$dismiss}', learnMore: '{$learnMore}', link: '{$link}', theme: '{$theme}', container: '{$container}', path: '{$path}',";

if($domain){
    $codeJS .= " domain: '{$domain}',";
}

$codeJS .= " expiryDays: {$expiryDays} };";

$this->registerJs($codeJS, \yii\web\View::POS_END);

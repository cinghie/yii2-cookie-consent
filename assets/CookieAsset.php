<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 1.4.2
*/

namespace cinghie\cookieconsent\assets;

class CookieAsset extends \yii\web\AssetBundle
{
	/**
     * @inherit
     */
	public $sourcePath = '@bower/cookieconsent2/';
	
	/**
     * @inherit
     */
	public $js=[
		'cookieconsent.js',
	];
	
	/**
     * @inherit
     */
	public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
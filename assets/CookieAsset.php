<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 1.2.0
*/

namespace cinghie\cookieconsent\assets;

use yii\web\AssetBundle;

class CookieAsset extends AssetBundle
{
	/**
     * @inherit
     */
	public $sourcePath = __DIR__;
	
	/**
     * @inherit
     */
	public $js=[
		'js/cookieconsent.js',
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

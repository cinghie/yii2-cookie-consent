<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 1.4.3
*/

namespace cinghie\cookieconsent\widgets;

use Yii;

class CookieWidget extends \yii\base\Widget 
{
  public $message;
  public $dismiss;  
  public $learnMore;
  public $link;
  public $theme;
  public $container;
  public $path;
  public $domain;
  public $expiryDays;
  
  public function init(){
	  parent::init();
	  
	  // Default Value
	  if(!$this->message) {
	  	  $this->message = 'This website uses cookies to ensure you get the best experience on our website.';
	  } else {
  	  	  $this->message = $this->message;
	  }
	  
	  if(!$this->dismiss) {
	  	  $this->dismiss = 'Got It!';
	  } else {
  	  	  $this->dismiss = $this->dismiss;
	  }
	  
	  if(!$this->learnMore) {
	  	  $this->learnMore = 'More info';
	  } else {
  	  	  $this->learnMore = $this->learnMore;
	  }
	  
	  if(!$this->link) {
	  	  $this->link = null;
	  } else {
  	  	  $this->link = $this->link;
	  }
	  
	  if(!$this->theme) {
	  	  $this->theme = 'dark-bottom';
	  } else {
  	  	  $this->theme = $this->theme;
	  }
	  
	  if(!$this->container) {
	  	  $this->container = null;
	  } else {
  	  	  $this->container = $this->container;
	  }
	  
	  if(!$this->path) {
	  	  $this->path = "/";
	  } else {
  	  	  $this->path = $this->path;
	  }
	  
	  if(!$this->domain) {
	  	  $this->domain	= "";
	  } else {
  	  	  $this->domain = $this->domain;
	  }
	  
	  if(!$this->expiryDays) {
	  	  $this->expiryDays	= 365;
	  } else {
  	  	  $this->expiryDays = $this->expiryDays;
	  }
  }
  
  public function run($params = [])
  {      
      return $this->render('cookieWidget',[
		  'message'    => $this->message,
		  'dismiss'    => $this->dismiss,
	  	  'learnMore'  => $this->learnMore,
          'link'       => $this->link,
          'theme'      => $this->theme,
		  'container'  => $this->container,
		  'path'       => $this->path,
		  'domain'     => $this->domain,
		  'expiryDays' => $this->expiryDays
      ]);
  }

}
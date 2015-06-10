<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 1.0
*/

namespace cinghie\cookieconsent\widgets;

use Yii;
use yii\base\widget;

class CookieWidget extends Widget 
{
  public $message;
  public $dismiss;  
  public $learnMore;
  public $link;
  public $theme;
  
  public function init(){
	  parent::init();
	  
	  // Default Value
	  
	  if(!$this->message) {
	  	  $this->message	= 'This website uses cookies to ensure you get the best experience on our website.';
	  } else {
  	  	  $this->message = $this->message;
	  }
	  
	  if(!$this->dismiss) {
	  	  $this->dismiss	= 'Got It!';
	  } else {
  	  	  $this->dismiss = $this->dismiss;
	  }
	  
	  if(!$this->learnMore) {
	  	  $this->learnMore	= 'More info';
	  } else {
  	  	  $this->learnMore = $this->learnMore;
	  }
	  
	  if(!$this->link) {
	  	  $this->link	= 'http://silktide.com/privacy-policy';
	  } else {
  	  	  $this->link = $this->link;
	  }
	  
	  if(!$this->theme) {
	  	  $this->theme	= 'dark-bottom';
	  } else {
  	  	  $this->theme = $this->theme;
	  }
  }
  
  public function run($params = [])
  {      
      return $this->render('cookieWidget', [
	  	  'learnMore'   => $this->learnMore,
          'link'        => $this->link,
          'theme'       => $this->theme
      ]);
  }

}

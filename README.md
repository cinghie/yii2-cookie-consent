Yii2 Cookie Consent
===================

Yii2 Cookie Consent to alerting users about the use of cookies on your Yii2 website, 
using Cookie Consent Script: https://github.com/silktide/cookieconsent2

Installation Using Composer
-----------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require cinghie/yii2-cookie-consent "*"
```

or add in composer.json

```
"cinghie/yii2-cookie-consent": "*"
```

Insert Widget
-----------------

You can load the CookieConsent Widget like this:

```
use cinghie\cookieconsent\widgtes\CookieWidget;

<?= CookieWidget::widget( [ 
        'learnMore' => 'More info',
		'link' => 'http://silktide.com/privacy-policy',
		'theme' => 'dark-bottom'
] ); ?>
```

Theme Options
-----------------

All the themes you can use are in the assets/css folder

Libraries Included
-----------------

https://github.com/silktide/cookieconsent2 (Version 1.0.3)

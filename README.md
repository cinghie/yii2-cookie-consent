Yii2 Cookie Consent
===================

Yii2 Cookie Consent to alerting users about the use of cookies on your Yii2 website, using Cookie Consent Script: https://github.com/insites/cookieconsent/tree/2.0.0

Installation Using Composer
-----------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require cinghie/yii2-cookie-consent "^1.5.0"
```

or add in composer.json

```
"cinghie/yii2-cookie-consent": "^1.5.0"
```

Insert Widget
-----------------

You can load the CookieConsent Widget like this:

```
use cinghie\cookieconsent\widgets\CookieWidget;

<?= CookieWidget::widget([ 
        'message' => 'This website uses cookies to ensure you get the best experience on our website.',
		'dismiss' => 'Got It',
        'learnMore' => 'More info',
		'link' => 'http://silktide.com/privacy-policy',
		'theme' => 'dark-bottom'
]); ?>
```

Theme Options
-----------------

<ul>
  <li>All Options at https://silktide.com/tools/cookie-consent/docs/installation/</li>
  <li>If you don't want a link for more info set learnMore to null</li>
</ul>

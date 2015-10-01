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

Changelog
-----------------

<ul>
  <li>Version 1.4.2 - Updated version</li>
  <li>Version 1.4.1 - Fixed composer bug</li>
  <li>Version 1.4.0 - Added Cookie Consent Bower Asset</li>
  <li>Version 1.3.0 - Update JS to 1.0.6 version and added new params</li>
  <li>Version 1.2.0 - Update JS to 1.0.4 version and ordered after Bootstrap</li>
  <li>Version 1.1.2 - Fixing error to extends yii Widget problem</li>
  <li>Version 1.1.1 - Added link null option</li>
  <li>Version 1.1.0 - Added Message & Dismiss Value</li>
  <li>Version 1.0.1 - Updated README</li>
  <li>Version 1.0.0 - Initial Release</li>
</ul>

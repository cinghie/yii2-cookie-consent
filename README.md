Yii2 Cookie Consent
===================

![License](https://img.shields.io/packagist/l/cinghie/yii2-cookie-consent.svg)
![Latest Stable Version](https://img.shields.io/github/release/cinghie/yii2-cookie-consent.svg)
![Latest Release Date](https://img.shields.io/github/release-date/cinghie/yii2-cookie-consent.svg)
![Latest Commit](https://img.shields.io/github/last-commit/cinghie/yii2-cookie-consent.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/cinghie/yii2-cookie-consent.svg)](https://packagist.org/packages/cinghie/yii2-cookie-consent)

Yii2 Cookie Consent to alerting users about the use of cookies on your Yii2 website, using Cookie Consent Script: https://github.com/insites/cookieconsent/tree/2.0.0

Installation Using Composer
-----------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require cinghie/yii2-cookie-consent "^1.5.1"
```

or add in composer.json

```
"cinghie/yii2-cookie-consent": "^1.5.1"
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

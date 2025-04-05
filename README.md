Yii2 social share- A beautiful social share buttons for yii2.
=========================================================
This is a social share buttons for yii2 projects.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist imanilchaudhari/yii2-social-share "^1.0"
```

or add

```
"imanilchaudhari/yii2-social-share": "^1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \imanilchaudhari\socialshare\ShareButton::widget([
        'style'=>'horizontal',
        'networks' => ['facebook','linkedin','twitter'],
	'data_via'=>'imanilchaudhari', //twitter username (for twitter only, if exists else leave empty)
]); ?>
```

About
-------

This is a replica of [SocialShareButton](http://www.yiiframework.com/extension/social-share-button) by [Yii Expert](https://yiiexpert.github.io).

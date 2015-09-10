Yii2 social share- A beautiful social share bar for yii2.
=========================================================
This is a social share bar for yii2 projects.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist imanilchaudhari/yii2-social-share "dev-master"
```

or add

```
"imanilchaudhari/yii2-social-share": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \imanilchaudhari\socialshare\ShareBar::widget([
        'style'=>'horizontal',
        'networks' => ['facebook','googleplus','linkedin','twitter'],
		'data_via'=>'imanilchaudhari', //twitter username (for twitter only, if exists else leave empty)
]); ?>
```

About
-------

This is replica of [SocialShareButton](http://www.yiiframework.com/extension/social-share-button) by [Yii Expert](https://yiiexpert.github.io).

Yii 2 [pagePiling](https://github.com/alvarotrigo/pagePiling.js) Asset Bundle
===========================================================================

This extension provides an assets bundle with [pagePiling.js and css](https://github.com/alvarotrigo/pagePiling.js)
for [Yii framework 2.0](http://www.yiiframework.com/) applications.

For license information check the [LICENSE](https://github.com/dhiraj/yii2-pagepiling/blob/master/LICENSE)-file.

[![License](https://poser.pugx.org/dhiraj/yii2-pagepiling/license.svg)](https://packagist.org/packages/dhiraj/yii2-pagepiling)
[![Latest Stable Version](https://poser.pugx.org/dhiraj/yii2-pagepiling/v/stable.svg)](https://packagist.org/packages/dhiraj/yii2-pagepiling)
[![Latest Unstable Version](https://poser.pugx.org/dhiraj/yii2-pagepiling/v/unstable.svg)](https://packagist.org/packages/dhiraj/yii2-pagepiling)
[![Total Downloads](https://poser.pugx.org/dhiraj/yii2-pagepiling/downloads.svg)](https://packagist.org/packages/dhiraj/yii2-pagepiling)


Support
-------
* [GutHub issues](https://github.com/dhiraj/yii2-pagepiling/issues)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "dhiraj/yii2-pagepiling:~1.0"
```

or add

```
"dhiraj/yii2-pagepiling": "~1.0",
```

to the `require` section of your `composer.json` file.

Usage
-----

In view

```php
traversient\yii\pagepiling\AssetBundle::register($this);

```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\traversient\yii\pagepiling\AssetBundle'
	];
}

```

and both the jquery.pipelining.js and css will be added to your page load.
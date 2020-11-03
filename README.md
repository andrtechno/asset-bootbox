Asset bootstrap notify
===========
Asset for Yii2

[![Latest Stable Version](https://poser.pugx.org/panix/asset-bootstrap-notify/v/stable)](https://packagist.org/packages/panix/asset-bootstrap-notify)
[![Total Downloads](https://poser.pugx.org/panix/asset-bootstrap-notify/downloads)](https://packagist.org/packages/panix/asset-bootstrap-notify)
[![Monthly Downloads](https://poser.pugx.org/panix/asset-bootstrap-notify/d/monthly)](https://packagist.org/packages/panix/asset-bootstrap-notify)
[![Daily Downloads](https://poser.pugx.org/panix/asset-bootstrap-notify/d/daily)](https://packagist.org/packages/panix/asset-bootstrap-notify)
[![Latest Unstable Version](https://poser.pugx.org/panix/asset-bootstrap-notify/v/unstable)](https://packagist.org/packages/panix/asset-bootstrap-notify)
[![License](https://poser.pugx.org/panix/asset-bootstrap-notify/license)](https://packagist.org/packages/panix/asset-bootstrap-notify)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist panix/asset-bootstrap-notify "*"
```

or add

```
"panix/asset-bootstrap-notify": "*"
```

to the require section of your `composer.json` file.

Add to your view
```
\panix\asset\bootstrap\notify\Asset::register($this);

$this->registerJs("
    $.notify({
        // options
        message: 'Hello World' 
    },{
        // settings
        type: 'danger'
    });
");
```

### links
* [Pixelion](https://pixelion.com.ua)
* [Plugin Author](http://bootstrap-growl.remabledesigns.com) and [Docs](http://bootstrap-growl.remabledesigns.com)
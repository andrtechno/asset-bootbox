Asset bootbox js
===========
Asset for Yii2

[![Latest Stable Version](https://poser.pugx.org/panix/asset-bootbox/v/stable)](https://packagist.org/packages/panix/asset-bootbox)
[![Total Downloads](https://poser.pugx.org/panix/asset-bootbox/downloads)](https://packagist.org/packages/panix/asset-bootbox)
[![Monthly Downloads](https://poser.pugx.org/panix/asset-bootbox/d/monthly)](https://packagist.org/packages/panix/asset-bootbox)
[![Daily Downloads](https://poser.pugx.org/panix/asset-bootbox/d/daily)](https://packagist.org/packages/panix/asset-bootbox)
[![Latest Unstable Version](https://poser.pugx.org/panix/asset-bootbox/v/unstable)](https://packagist.org/packages/panix/asset-bootbox)
[![License](https://poser.pugx.org/panix/asset-bootbox/license)](https://packagist.org/packages/panix/asset-bootbox)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist panix/asset-bootbox "*"
```

or add

```
"panix/asset-asset-bootbox": "*"
```

to the require section of your `composer.json` file.

Add to your view
```
\panix\asset\bootbox\Asset::register($this);

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
* [Plugin bootboxjs](http://bootboxjs.com/) and [Docs](http://bootboxjs.com/documentation.html)
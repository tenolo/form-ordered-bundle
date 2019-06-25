## Download the bundle

Require the library in your `composer.json` file:

``` bash
$ composer require tenolo/ordered-form-bundle
```

## Register the bundle

### With Symfony Flex

If you use symfony flex the bundle will be automatically registered.

### Pre Symfony Flex Age

Add the bundle in your `AppKernel`:

``` php
// app/AppKernel.php

public function registerBundles()
{
    return [
        // ...
        new Tenolo\Bundle\FormOrderedBundle\TenoloFormOrderedBundle(),
    ];
}
```

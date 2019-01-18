## Download the bundle

Require the library in your `composer.json` file:

``` bash
$ composer require tenolo/ordered-form-bundle
```

## Register the bundle

Then, add the bundle in your `AppKernel`:

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

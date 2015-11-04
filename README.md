Symfony Standard Edition + Clarity Bundles
========================

Project contain Clarity bundles as submodules for fast development

List of included Clarity bundles:

* [ClarityCdnBundle](https://github.com/clarity-project/ClarityCdnBundle)
* [ClarityYandexDirectBundle](https://github.com/clarity-project/ClarityYandexDirectBundle)
* [ClarityYandexOAuthBundle](https://github.com/clarity-project/ClarityYandexOAuthBundle)

Commands to get started with this project:

`git clone git@github.com:clarity-project/ClarityDevProject.git`

`git submodule init`

`git submodule update`

After that in `src/Clarity` directory you will see bundles listed above.

### How to add another Clarity bundle to this project?

`git submodule add git@github.com:clarity-project/ClarityCdnBundle.git src/Clarity/CdnBundle`

Note: please dont use `Clarity` prefix in bundle final directory name!

After that add bundle namespace to `composer.json` as below:

```json
    "autoload": {
        "psr-4": { 
            ...
            "Clarity\\CdnBundle\\": "src/Clarity/CdnBundle/"
        }
    },

```

Now you need to regenerate composer namespaces:

`composer dump-autoload`

Register new symfony bundle with new line in `AppKernel.php`

```php
    // ...
    new Clarity\CdnBundle\ClarityCdnBundle(),
    // ...
```

That's all! Don forget configure bundle if needed in `config.yml`

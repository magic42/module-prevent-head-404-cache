Magic42 Prevent Head 404 Cache Extension
=====================
Facts
-----
- version: 1.0.0
- extension key: Magic42_PreventHead404Cache
- [extension on GitHub](https://github.com/magic42/module-prevent-head-404-cache)
- [direct download link](https://github.com/magic42/module-prevent-head-404-cache/archive/master.zip)

Description
-----------
Magento 2.3 Caches a 404 HEAD Request which in turn means a future GET request returns the cached 404. 
This Plugin checks the Http request to see if its a 404 HEAD request and will return void to prevent it from being 
cached

Temporary Fix for [#21299](https://github.com/magento/magento2/issues/21299)

Requirements
------------
- PHP >= 7.1
- Magento Framework 102.0.0

Compatibility
-------------
- Magento >= 2.3.0

Installation Instructions
-------------------------
```BASH
composer config repositories.magic42 git git@github.com:magic42/module-prevent-head-404-cache.git
composer require magic42/module-prevent-head-404-cache
php bin/magento module:enable Magic42_PreventHead404Cache
php bin/magento setup:upgrade
php bin/magento cache:flush
```

Uninstallation
--------------
`composer remove magic42/module-prevent-head-404-cache`

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/magic42/module-prevent-head-404-cache/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://github.com/magic42/module-prevent-head-404-cache/pulls).

Developer
---------
- Magic42
- [Website](http://www.magic42.co.uk/)
- [Contact Us](https://www.magic42.co.uk/contact/)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2019 Magic42

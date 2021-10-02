[![ExtDN M2 Coding Standard](https://github.com/eugene-petrov/magento2-observer/actions/workflows/coding-standard.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-observer/actions/workflows/coding-standard.yml)
[![ExtDN M2 Mess Detector](https://github.com/eugene-petrov/magento2-observer/actions/workflows/mess-detector.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-observer/actions/workflows/mess-detector.yml)
[![ExtDN M2 PHPStan](https://github.com/eugene-petrov/magento2-observer/actions/workflows/phpstan.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-observer/actions/workflows/phpstan.yml)

***Snippet_Plugin***

Problem: you need to change any (almost any) public method.

[Here](http://devdocs.magento.com/guides/v2.1/extension-dev-guide/plugins.html) you can find more about plugins.

To enable this module execute:
- `php bin/magento --clear-static-content module:enable Snippet_Plugin`
- `php bin/magento setup:upgrade`

***Snippet\Plugin\Plugin\Frontend\ModifyHeader***
file is an example of around and after plugins.
'Around' does nothing.
While 'after' wraps into parentheses welcome message like this:

`(Default welcome msg!)`


***Snippet\Plugin\Plugin\Frontend\ModifyBreadcrumbs***
file is an example of 'before' option. E.g. on detail product page breadcrumbs will look like this:

`(Home) > (Test Product)`

# Bug Spray #
**Contributors:** [@sewmyheadon](https://profiles.wordpress.org/@sewmyheadon)  
**Tags:** development, tools, dev tools
**Requires at least:** 4.5  
**Tested up to:** 5.0.2  
**Stable tag:** 1.0.5
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

## Description ##

_Bug Spray_ is a WordPress plugin that contains a small suite of developer tools to make WordPress development and debugging easier and more fun.

This plugin includes:

1. [Composer](https://getcomposer.org/) - Manage PHP dependencies.
2. [Kint](https://github.com/kint-php/kint) - Helpful replacement for [var_dump()](http://php.net/manual/en/function.var-dump.php), [print_r()](http://php.net/manual/en/function.print-r.php) and [debug_backtrace()](http://php.net/manual/en/function.debug-backtrace.php).
3. [Whoops](https://github.com/filp/whoops) - Replaces default PHP orange error table with information you can actually use.
4. [Grunt](https://gruntjs.com/) - Used only if you wish to help develop this plugin further. Grunt is used for i18n and readme.txt to readme.md conversion.

## Installation ##
[Composer](https://getcomposer.org/) must already be installed on your system.

1. Clone this project into a directory within `wp-content/plugins/`.
1. Use Terminal to `cd` into the plugin directory and run `composer install`. This will load this plugin's dependencies.
1. If you are developing Bug Spray rather than using it _for_ development, run `npm install` from the plugin directory.
1. Log into your WordPress site
1. Activate the plugin.

Once you have installed and activated Bug Spray, your WordPress Admin bar will turn orange.

![Bug Spray Admin Bar](https://raw.githubusercontent.com/sewmyheadon/bug-spray/development/assets/images/bug-spray-admin-bar.png)

## Usage ##

### Kint ###

[Kint](https://github.com/kint-php/kint) is debugging tool for PHP developers.

> Kint is (not) just a pretty replacement for **[var_dump()](https://secure.php.net/function.var_dump)**, **[print_r()](https://secure.php.net/function.print_r)** and **[debug_backtrace()](https://secure.php.net/function.debug_backtrace)**

Once activated you can use the following functions to help troubleshoot code:

* `d()` - Dumps data
* `ddd()` - Dumps data and dies

Just wrap these functions around a variable and you'll get a nicer visual presentation of the variable data.

![Kint](https://raw.githubusercontent.com/sewmyheadon/bug-spray/development/assets/images/kint.png)

### Whoops ###
When your PHP code has an error, [Whoops](https://github.com/filp/whoops) will whip the error codes into a more helpful, readable format to make debugging easier.

![Whoops](https://raw.githubusercontent.com/sewmyheadon/bug-spray/development/assets/images/whoops.png)

### Sandbox ###
There's also a sandbox.php file in the `src` directory that you can use to try out code.

## Where to get help ##

* Currently, this is the official documentation. Docs for [Composer](https://getcomposer.org/), [Kint](https://github.com/kint-php/kint), and [Whoops](https://github.com/filp/whoops) can be found on their respective sites.
* You can [post issues on Github](https://github.com/sewmyheadon/bug-spray/issues).

## Contribution Guidelines ##
Feel free to [contribute pull requests](https://github.com/sewmyheadon/bug-spray/pulls).

## Contributor List ##
* [sewmyheadon](https://github.com/sewmyheadon)
* [KnowTheCode](https://github.com/KnowTheCode)

## Credits, Inspiration, Alternatives ##
This plugin is inspired by Tonya Mork of [KnowTheCode](https://github.com/KnowTheCode), who has a great tutorial on building [this plugin](https://github.com/KnowTheCode/WordPress-Starter-Plugin-Lab) on [KnowTheCode.io](https://knowthecode.io/).

## License ##
GPL v2 license. See LICENSE for full details.

## Code Quality ##
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sewmyheadon/bug-spray/badges/quality-score.png?b=development)](https://scrutinizer-ci.com/g/sewmyheadon/bug-spray/?branch=development)

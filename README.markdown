Add Locale definition support
================

New repository: https://github.com/yukku0423/w2wiki/

Because original author brings over from Google Code to github.

----

Modified avaliable user definition locale(Button, Label, Message, etc...)

Define your locale.
----------------

Set your locale value (ex:ja, en)
	define('LOCALE', 'ja');

It is used for lang attribute of <html> and to decide which locale use.

Define word set
----------------

Copy lang/sample.php to lang/{locale}.php, then rewrite it.

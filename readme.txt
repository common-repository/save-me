=== Save Me ===
Contributors: davidfcarr
Tags: code, javascript, rich text editor, shortcode, shortcodes
Requires at least: 3.0
Tested up to: 3.1
Stable tag: 1.1

Saves JavaScript and other inline code from distortion by the WordPress rich text editor. Bracket with the shortcode `[saveme][/saveme]`.

== Description ==

The Save Me plugin saves JavaScript and other inline code from distortion by the WordPress rich text editor. Add code in the editor's VISUAL mode, bracketing it with the shortcode `[saveme][/saveme]`.

While it is possible without a plugin to switch to HTML editing mode and paste JavaScript into a post, often the code will be scrambled if you toggle back and forth between the HTML and Visual modes. For example, the TinyMCE editor sometimes eliminates what it doesn't understand -- like empty divs into which your JavaScript or AJAX widget needs to inject content. And since JavaScript code is not displayed with any representation in the visual editor, it's easy to accidentally delete.

In rich tech mode, the editor will treat your code as if it were a code sample you were writing about, rather than a script to be executed. You may see distortions, like quotation marks being turned into curly quotes, but at least you can keep track of where you inserted the code. The saveme shortcode function reverses HTML entity transformations and turns your JavaScript widget back into executable code.

The saveme shortcode has been tested with Facebook social widgets and Google Adsense JavaScript blocks. If you encounter JavaScript that does not work after being passed through this function, contact me through [__Carr Communications Inc.__](http://www.carrcommunications.com/) and I will try to determine why not.

This is a spinoff of a similar function in [__Facebook Tab Manager for WordPress__](http://www.carrcommunications.com/wordpress-plugins/facebook-tab-manager/)


== Installation ==

1. Upload the entire `save-me` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Where can I get more information about using Facebook Tab Manager? =

See the [plugin homepage](http://www.carrcommunications.com/wordpress-plugins/save-me/).

== Screenshots ==

1. Using the `saveme` shortcode in the editor
2. Reconstituted as working JavaScript

== Credits ==

    Facebook Tab Manager
    Copyright (C) 2011 David F. Carr

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    See the GNU General Public License at <http://www.gnu.org/licenses/>.
	
== Changelog ==

= 1.0 =

First public release, March 2011
=== Covid-19 Modal ===
Contributors: (this should be a list of wordpress.org userid's)
Tags: covid-19, coronavirus, modal, alert, banner, extensible
Requires at least: 4.7
Tested up to: 5.4
Stable tag: 1.0.0
Requires PHP: 5 >= 5.3.0, PHP 7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin provides an easy to install and configure modal functionality. It is intended to give site maintainers a quick way to convey critical information during the current pandemic.

== Description ==

This plugin provides an easy to install and configure modal functionality. It is intended to give site maintainers a quick way to convey critical information during the current pandemic.

The plugin provides:

 - A single modal with a settings page for customizing the title, body content, and call to action link url and text of the modal.
 - Modal is dismissable and sets a javascript cookie to remember the user's action for future visits. 
 - CSS and Javascript is enqueued using WordPress's hooks.
 - Modal content is fed to the pure JS modal implementation via WordPress REST calls.

== Frequently Asked Questions ==

= How do I configure the modal content? =

Within the WordPress admin site, go to: `Settings > Covid Modal Options` to fill out and submit the settings page.

= I installed and configured my modal but it looks bad with my theme, what can I do to fix it? =

We tried hard to scope our styles and class structure in such a way as to not conflict with custom themes however we cannot 100% avoid style collisions. If the site styles and the modal styles conflict, you may need to add additional styles or override provided styles to customize to your specific WordPress site.

We suggest that you do this in your theme.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is stored in the /assets directory.
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](https://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: https://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`

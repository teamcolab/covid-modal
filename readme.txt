=== Covid-19 Modal ===
Contributors: teamcolab
Tags: covid-19, coronavirus, modal, alert, banner, extensible
Requires at least: 5.0
Tested up to: 5.4
Stable tag: 1.0.0
Requires PHP: 5 >= 5.3.0, PHP 7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin provides an easy to install and configure modal functionality. It is intended to give site maintainers a quick way to convey critical information during the current pandemic.

== Description ==

## Covid-19 Modal

This plugin provides an easy to install and configure modal functionality. It is intended to give site maintainers a quick way to convey critical information during the current pandemic.

## The plugin provides:

 - A single modal with a settings page for customizing the title, body content, and call to action link url and text of the modal.
 - Modal is dismissable and sets a javascript cookie to remember the user's action for future visits. 
 - CSS and Javascript is enqueued using WordPress's hooks.
 - Modal content is fed to the pure JS modal implementation via WordPress REST calls.
 - Modal content can be overridden using the `covid_modal_template` filter.
 - Stylesheets can be added/removed from enqueue via the `covid_modal_stylesheet` filter.
 - All modal assets can be enabled/disabled by checking/unchecking the Enable Modal box on the settings page.

## Overriding the Modal Content

To override the modal content inside your theme's functions file hook into the `covid_modal_template` filter.

```
<?php
function covid_modal_template_override($modal_content, $modal_data) {
    // $modal_content is the rendered markup from wp-content/plugins/covid-modal/templates/modal_template.php
    // using the same $modal_data provided to this hook.
    //
    // $modal_data = [
    //     'modal_title' => get_option('modal_title'),
    //     'modal_content' => get_option('modal_content'),
    //     'cta_link_url' => get_option('cta_link_url'),
    //     'cta_link_text' => get_option('cta_link_text')
    // ];

    return $modal_content;
}
add_filter('covid_modal_template', 'covid_modal_template_override');
```

## Overriding Modal Styles

Our styles provide a baseline that works with most sites and tries to preserve existing site styles and not be too opinionated. It may require additional styles be added.

```
function covid_modal_stylesheet_override($stylesheets) {
    // remove built-in stylesheets
    // $stylesheets = [];

    // Add a stylesheet to include after the default styles
    // $stylesheets[] = 'path/to/my/stylesheet/modal-override.css';

    return $stylesheets;
}
add_filter('covid_modal_stylesheet', 'covid_modal_stylesheet_override');
```

== Installation ==

1. enable the plugin
2. go to the plugin's settings page
3. update your modal's content making sure to check the box to enable the modal
4. submit the settings page
5. Success!

== Frequently Asked Questions ==

= Who is this for? =

This plugin is for site maintainers and developers. While the plugin is fully featured, we built it for ourselves and our clients. We needed a plugin that worked out-of-box on install but also allowed extreme customization. It was on this last point that existing plugins didn't fit our needs.

= How do I configure the modal content? =

Within the WordPress admin site, go to: `Settings > Covid Modal` to fill out and submit the settings page.

= I installed and configured my modal but it looks bad with my theme, what can I do to fix it? =

We tried hard to scope our styles and class structure in such a way as to not conflict with custom themes however we cannot 100% avoid style collisions. If the site styles and the modal styles conflict, you may need to add additional styles or override provided styles to customize to your specific WordPress site.

= How is this different from <insert some plugin name here>?

There are many alert, banner, modal, etc plugins available. This one is simple yet full featured and implements custom WordPress filter hooks to allow for extreme customization.

== Screenshots ==

1. Example default modal using the twenty-twenty theme.
2. Example of the Alert Modal management screen.

== Changelog ==

= 1.0 =
* Initial Version

== Upgrade Notice ==

= 1.0 =
Initial Version


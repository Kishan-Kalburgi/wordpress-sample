=== Advocator Lite WordPress Theme ===
Contributors: rescuethemes
Donate link: https://rescuethemes.com
Tags: custom-menu, translation-ready, threaded-comments, theme-options, two-columns, custom-colors, featured-images
Requires at least: 4.1
Tested up to: 4.8.2
Stable tag: 1.0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Advocator Lite - A WordPress theme for non-profits, charities, and organizations that do good.
Advocator Lite incorporates elegant style with user friendly customizer options making it perfectly suited for a variety of WordPress users. With rock solid development and flexible integration, the Advocator Lite theme is sure to be a favorite for first time WordPress users and experienced developers alike.

== Description ==

Advocator Lite - A WordPress theme for non-profits, charities, and organizations that do good.
Advocator Lite incorporates elegant style with user friendly setup options making it perfectly suited for a variety of WordPress users. With rock solid development and flexible integration with the Foundation Framework, the Advocator Lite theme is sure to be a favorite for first time WordPress users and experienced developers alike.

You can customize the theme with the native WordPress Customize feature allowing changes to appear instantly while editing. Advocator Lite can be used out of the box, or, treated as a starter theme for developers.

== Installation ==

1. Upload the theme zip file from Appearance > Themes
2. Activate the theme.
3. Create a new page called "Home".
4. In the "Home" page editing area, assign the Home template in the Page Attributes area.
5. Create a new page called "Blog".
5. Navigate to "Settings > Reading" and assign Front page as "Home" and Posts page as "Blog".
6. Add content to your website and enjoy!

== Local Sass Installation ==

sass --watch scss/style.scss:style.css

== Home Page ==

To use the home page template, create a new page and assign it the "Home" template under the Page Attributes settings.

Then navigate to "Settings > Reading" and assign Front page as "Home" and Posts page as "Blog".

The home page consists of several sections:

1. A widgetized top "Home Hero" area.  "Appearance > Customize > Theme Options > Home Hero Area”.
2. A widgetized top "Home Top” area. "Appearance > Customize > Theme Options > Home Top Area“.
3. A widgetized top "Home Left” area. "Appearance > Customize > Theme Options > Home Left Area“.
4. A widgetized top "Home Right” area. "Appearance > Customize > Theme Options > Home Right Area“.
5. A widgetized top “Footer” area. "Appearance > Customize > Theme Options > Footer Left/Middle/Right“.


== Theme Customization ==

All theme customization options are located at "Appearance > Customize > Theme Options". Some Options are only available in Advocator Plus

Theme Options tabs:

* Header: Change navigation colors, upload a logo.
* Header Top Widgets: Change the background color and text hover color.
* Blog: Enter blog page title and subtitle.
* Footer: Set social icons and enter footer copyright text.

== Navigation ==

This theme supports one navigation menu. You can edit this menu in WordPress at "Appearance > Menus".

== Widgets ==

This theme supports several different widgetized areas: Home Hero, Inner Sidebar, Home - Top, Left and Right, and Footer - left, middle, right. You can add widgets to these areas in "Appearance > Widgets".


== Child Theme ==

Child themes allow you to modify or add to the functionality of the Advocator Lite theme. A child theme is the best, safest, and easiest way to modify an existing theme, whether you want to make a few tiny changes or extensive changes. Instead of modifying the Advocator Lite theme files directly, create a child theme and override within.

To create a child theme:

1. Create a new directory name “advocator-lite-child" in /wp-content/themes/.
2. Create a file called "style.css" in the "advocator-lite-child" directory.
3. Add the following information to the top of style.css:

`/*
 Theme Name:   Advocator Lite Child
 Theme URI:    https://rescuethemes.com/wordpress-themes/advocator-lite/
 Description:  Advocator Lite Child Theme
 Author:       Rescue Themes
 Author URI:   https://rescuethemes.com
 Template:     advocator-lite
 Version:      1.0
 Tags: custom-menu, translation-ready, threaded-comments, theme-options, two-columns, custom-colors, featured-images
 Text Domain:  advocator-lite
*/`

4. Create a file called "functions.php" in the "advocator-lite-child" directory.
5. Add the following function to functions.php.

`
<?php

function advocator_lite_enqueue_parent_theme_style() {
    wp_enqueue_style( 'advocator-lite-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'advocator-lite-style' );
    wp_enqueue_style( 'advocator-lite-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'advocator_lite_enqueue_parent_theme_style', 99 );
`

6. Activate the child theme from your WordPress admin area.

== Frequently Asked Questions ==

= Where do I go if I have some questions? =

Post your questions on the theme support forum:

https://wordpress.org/support/theme/advocator-lite

== License Info ==

Foundation Framework - ​http://foundation.zurb.com/
License: GPL-2.0+ - http://www.gnu.org/licenses/gpl-2.0.html
Copyright: @ZURB

Underscores - ​http://underscores.me/
License: MIT License - http://foundation.zurb.com/learn/faq.html#question-3
Copyright: @automattic

Customizer Library - https://github.com/devinsays/customizer-library
License: GPL-2.0+ - http://www.gnu.org/licenses/gpl-2.0.html
Copyright: @devinsays

Font Awesome - ​http://fontawesome.io
Fonts: SIL OFL 1.1, CSS: MIT License - http://fontawesome.io/license
Copyright: @davegandy

Modernizer - http://modernizr.com, (C) Faruk Ates, Paul Irish, Alex Sexton,
[MIT](http://opensource.org/licenses/MIT)

Image in Theme screenshot.png
https://www.flickr.com/photos/isafmedia/6862450441/
[CC2](https://creativecommons.org/licenses/by/2.0/)

Logo Image - http://demo.rescuethemes.com/advocator/wp-content/uploads/sites/2/2014/11/advocator-logo.png
[CC0] 1.0 Universal (CC0 1.0) - http://creativecommons.org/publicdomain/zero/1.0/
Copyright: @jamigibbs

== Changelog ==

= 1.0.4 - 2017-10-17 = 

* Tested with 4.8.2

= 1.0.3 - 2017-3-15 =

* First Release



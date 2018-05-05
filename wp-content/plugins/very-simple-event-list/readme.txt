=== Very Simple Event List ===
Contributors: Guido07111975
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donation%40guidovanderleest%2enl
Version: 8.0
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.6
Tested up to: 4.9
Stable tag: trunk
Tags: simple, event, events, event list, event manager


This is a very simple plugin to display a list of events. Use a shortcode to display events on a page or use the widget.


== DESCRIPTION ==
= About =
This is a very simple plugin to display a list of events.

Use a shortcode to display events on a page or use the widget.

You can personalize your event list via the settingspage or by adding attributes to the shortcode or the widget.

= How to use =
After installation go to Events and start adding your events.

Create a page and:

* Use shortcode `[vsel]` to display upcoming events (including today)
* Use shortcode `[vsel-past-events]` to display past events
* Use shortcode `[vsel-current-events]` to display current events
* Use shortcode `[vsel-all-events]` to display all events

= Settingspage =
Via Settings > VSEL you can:

* Keep events and settings when uninstalling plugin
* Show a summary instead of all content
* Link title to the event page
* Link featured image to the event page
* Set size that is being used for the featured image
* Change or hide event labels

= Shortcode attributes =
You can set amount of events per page. This will overwrite amount set in Settings > Reading.

* Example: `[vsel posts_per_page=5]`

You can display events from certain categories. You should enter the category slug. The slug is not always the same as the name of the category.

* Example: `[vsel event_cat="first-category, second-category"]`

The default order of the upcoming and current events list is ascending. The default order of the past and all events list is descending.

* Change order from ascending to descending: `[vsel order=desc]`
* Change order from descending to ascending: `[vsel order=asc]`

You can change the text that is being displayed when there are no events.

* Example: `[vsel no_events_text="your text here"]`

You can also add multiple attributes. Use a single whitespace to separate multiple attributes.

* Example: `[vsel posts_per_page=5 event_cat="first-category, second-category"]`

= Widget attributes =
The widget supports the same attributes. Enter them without shortcode itself and without brackets.

Example 1:

* If shortcode attribute is: `[vsel posts_per_page=5]`
* Widget attribute will be: `posts_per_page=5`

Example 2:

* If shortcode attribute is: `[vsel event_cat="first-category, second-category"]`
* Widget attribute will be: `event_cat="first-category, second-category"`

= Featured image =
WordPress creates duplicate images in different sizes upon upload. These sizes can be set via Settings > Media.

Via the settingspage you can change the default image size that is being used to display the featured image.

By default the "post-thumbnail" size of your theme is being used. But in case of a small size, you might want to change this to avoid a tiny or blurry featured image.

I have set the featured image width at max 40% of the event content area.

The featured image in a single event is handled by your theme.

= Template files =
Plugin has basic support for template files that are being used to display a single event, the event category page and the search results page.

It does one thing: it hooks into the `the_content()` and `the_excerpt()` function. So if your theme uses it's own customized version, the content and excerpt might not be displayed properly.

= Single event =
In most cases template file "single.php" is being used to display a single event. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you can add a file called "single-event.php" in your theme folder and customize it to your needs.

= Event category page =
In most cases template file "archive.php" is being used to display a category (archive) page. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you can add a file called "taxonomy-event_cat.php" in your theme folder and customize it to your needs.

You can also use a shortcode on a page to display events from certain categories. For more info check the "Shortcode attributes" section.

The setting to display a summary instead of all content will only work when using a shortcode on a page.

= Search results page =
You can list events on your search results page, using a custom search query.

Template file "search.php" is being used to display search results. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you should hook into template file "search.php" or modify this file.

= Uninstall =
If you uninstall plugin via WP dashboard all events and settings will be removed from database.

It removes all posts with (custom) post type "event".

You can avoid this via Settings > VSEL.

= Question? = 
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-event-list) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== INSTALLATION ==
Please check Description section for installation info.


== Frequently Asked Questions ==
= How can I change date format? =
You can set date format in WP dashboard via Settings > General.

The datepicker and date input field in WP dashboard only support 2 numeric date formats: "day-month-year" (30-01-2016) and "year-month-day" (2016-01-30).

If the date format set in WP dashboard is not the same, it will be changed into 1 of the 2 above.

= How do I set plugin language? =
Plugin will use the site language, set in Settings > General.

If plugin isn't translated into this language, language fallback will be English.

= What do you mean with current events? =
Current events are events I can visit today. So this can be an one-day or multi-day event.

= Are events also listed on time? =
No, because input field for time is a regular text input this is not possible.
 
= Can I display a summary instead of all content? =
Yes, this is possible.

You can activate the summary via Settings > VSEL.

And you can set a custom summary while adding an event. This will replace the default summary (if activated).

= Why is the page with all events not displayed properly? =
Go to the page in your dashboard and check the shortcode in "Text" mode.

If you have added the shortcode in "Visual" mode, it might be wrapped in HTML tags, such as: `<script>[vsel]</script>`

You should remove the HTML tags and resave the page.

= Why a 404 (nothing found) when I click the pagination? =
This might be caused because the slug of your page ends with "event". This causes a conflict with my plugin.

You should change this slug into something else. The slug is not always the same as the name of the page.

= Why a 404 (nothing found) when I click the title link? =
This is mostly caused by the permalink settings. Please reset the permalink via Settings > Permalinks.

= What does "Link to more info" mean? =
While adding an event you can add a link (an URL) to a post, page or website.

This can be useful in case additional info is available elsewhere.

And you can label this link. Default (translated) label is "More info".

= What does "Link to all events" mean? =
While adding a widget you can add a link (an URL) to a page with all events.

This can be useful because in most cases you only display a few events in a widget.

And you can label this link. Default (translated) label is "All events".

= Why no pagination in widget? =
Pagination is not available because it's not working properly in a widget.

But you can set a link to a page with all events.

= Can I use multiple shortcodes on the same page? =
Yes, as far as I know there are no issues when using multiple shortcodes.

= Why an error notification instead of a date? =
An error notification is displayed in case start date begins after end date. To solve this please reset date.

= Why no start date in dashboard? =
All events posted with version 4.0 and older have 1 date only. To solve this please reset date.

= Why no meta, image or categories while adding an event? =
If these boxes are not present, they might be unchecked in Screen Options.

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link on the WordPress plugin page and my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 8.0 =
* changed css class no-events into vsel-no-events
* file vsel-templates: removed unnecessary escaping from empty variables
* file vsel: changed id of variable event_date into event_end_date
* file vsel: changed id of custom admin column date_column into end_date_column
* these id changes have no visible effect and they will not change database entries

= Version 7.9 =
* removed files vsel-single and vsel-category
* added file vsel-templates
* relocated content of the removed files to this file
* now plugin support for theme template files is located in 1 file
* file vsel: minor textual change
* updated readme file

= Version 7.8 =
* some textual changes on settingspage
* file vsel: changed the id of custom admin columns

= Version 7.7 =
* some textual changes on settingspage
* updated file vsel-options

= Version 7.6 =
* new: added support for the search results page
* updated file vsel-category
* updated readme file

For all versions please check file changelog.


== Screenshots == 
1. Very Simple Event List (Twenty Seventeen theme).
2. Very Simple Event List single event (Twenty Seventeen theme).
3. Very Simple Event List widget (Twenty Seventeen theme).
4. Very Simple Event List (dashboard).
5. Very Simple Event List single event (dashboard).
6. Very Simple Event List widget (dashboard).
7. Very Simple Event List settingspage (dashboard).
8. Very Simple Event List settingspage (dashboard).
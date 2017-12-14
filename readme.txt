=== Fukasawa ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 4.4
Tested up to: 4.8
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Upload the theme
2. Activate the theme

All theme specific options are handled through the WordPress Customizer.


== Licenses ==

Lato
License: SIL Open Font License, 1.1 
Source: https://fonts.google.com/specimen/Lato

Genericon font icon set
License: GNU GPL 2.0
Source: http://genericons.com

screenshot.png images
License: CC0 Public Domain 
Source: http://www.unsplash.com

Flexslider jQuery Slider
License: GNU GPL 2.0
Source: http://flexslider.woothemes.com


== Frequently Asked Questions ==


== Use the gallery post format 

1. Go to Admin > Posts > Add New.
2. Select the "Gallery" post format in the Post Attributes box.
3. Click "Add Media" and upload the images you wish to display in the gallery.
4. Close the Media window and publish/update the post.
5. The images you uploaded should now be displayed in the post gallery.



== Use the video post format

1. Go to Admin > Posts > Add New.
2. Select the "Video" post format in the Post Attributes box.
3. A meta box with the title "Video URL" should appear in the top of the right sidebar.
4. Paste the URL to the video you wish to display in the box, and publish/update the post.
5. The video you linked to should now be displayed in the media section above the post.


== Changelog ==

Version 1.12 (2017-12-03)
-------------------------
- Replaced ternany shorthands will full-length version, to retain support for PHP pre 5.3 

Version 1.11 (2017-11-26)
-------------------------
- Updated to the new readme.txt format, with changelog.txt incorporated into it
- Added a demo link to the stylesheet theme description
- Removed specific post types for add_theme_support( 'post-thumbnails' );
- Added a deliberate dependency order to the stylesheet enqueueing
- Same for scripts enqueues
- Made all functions in functions.php pluggable
- Replaced a new WP_Query in widgets/recent-posts.php with a get_posts()
- Fixed genericons path
- Made a text string in single.php translateable
- Fixed notice in comments.php
- Changed closing element comment structure
- General code cleanup, improvements in readability
- Removed duplicate comment-reply enqueueing from the header (already in functions)
- SEO improvements (title structure, mostly)
- Better handling of edge cases (missing title, missing content)
- Restructured query on the archive page template


Version 1.10 (2016-06-28)
-------------------------
- Added the new theme directory tags

Version 1.09 (2016-04-02)
-------------------------
- Fixed respond input margins with new order of inputs

Version 1.08 (2016-03-12)
-------------------------
- Fixed Flickr widget styling issue
- Removed extra semicolon in Flickr widget input label

Version 1.07 (2016-03-12)
-------------------------
- Fixed automated theme scanning error (.ds_store)

Version 1.06 (2016-03-12)
-------------------------
- Fixed an issue with empty titles

Version 1.05 (2015-08-25)
-------------------------
- Fixed an issue with overflowing images
- Added the .screen-reader-text class

Version 1.04 (2015-08-11)
-------------------------
- Removed a superfluous closing <p> tag
- Replaced a custom title function with support for title-tag
- Added comment-reply to enqueued js files
- Removed the custom post meta boxes for content-video from functions.php
- Added sanitize callback for custom accent color
- Removed do_shortcode() function from functions.php
- Modified theme widgets to use __construct() in prep for WP 4.3
- Removed superfluous code from single.php (leftovers from previously supported post formats)
- Changed post title elements on singular from h2 to h1 for SEO reasons
- Updated the Swedish translation

Version 1.03 (2014-09-22)
-------------------------
- Fixed an issue with the read more image in the post editor being too big

Version 1.02 (2014-09-13)
-------------------------
- Added missing function prefix in functions.php
- Added esc_url to the video urls
- Fixed a bug in the flexslider function

Version 1.01 (2014-09-10)
-------------------------
- Added missing function prefixes in functions.php
- Globalized $content_width and moved it to the theme initialization

Version 1.0 (2014-08-04)
------------------------- 
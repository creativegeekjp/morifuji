=== Breadcrumbs Everywhere ===
Contributors: betsyk
Donate link: http://www.umaitech.com
Tags: buddypress, wordpress, breadcrumb, navigation, theme, developer
Requires at least: WordPress 3.0, BuddyPress 1.5
Tested up to: WordPress 3.8 / BuddyPress 1.9
Stable tag: 1.6 

Adds breadcrumb trail navigation to BuddyPress. Simple, just add one line of code to your template.  

== Description ==

Missing crumbs?  Find them with Breadcrumbs Everywhere! This plugin adds breadcrumb trail navigation to BuddyPress. Simple, just add one line of code to your template. You don't need to use it, but there is an admin feature, too. 


= Included languages: =

* English
* German (-DE)
* French (-FR)
* Spanish (-ES)
* Italian (-IT)


== Frequently Asked Questions == 

= Can I use Breadcrumbs Everywhere with WordPress by itself? = 

No, Breadcrumbs Everywhere requires a BuddyPress installation. However, it does show breadcrumbs on the WordPress pages and posts that are part of your BuddyPress website. 


= Where can I change the default settings? =

Breadcrumbs Everywhere works as a one step template tag using the BuddyPress default page names: Members, Groups, Activity, and Forums. If you have renamed these pages the plugin will use your custom names instead. Additionally, an admin feature is available to change these default settings (possibly with more options in the future): 

* Text for the Home link
* Text for the Blog link
* Text for the breadcrumb divider

From the WordPress admin menu, go `BuddyPress > Breadcrumbs Everywhere`.


= How do I display breadcrumbs for BuddyPress Actions? =

Trails to Level 5 Actions (i.e. Home > Members > Admin > Messages > Sent) are possible, but they are not activated by default. See `/includes/crumbs-core.php` for customization instructions. 

= How do I display breadcrumbs on my primary Home or Blog pages? =

Including a Home link on your Home page (or a Blog link on your main Blog page) is possible, but this is not activated by default. See `/includes/crumbs-core.php` for customization instructions. 


= Where can I get support or request a feature? =

Post any questions in the WordPress forum, on the [plugin page](http://www.umaitech.com/cms/?p=154), or track me down by email via [my website](http://www.umaitech.com).



== Screenshots ==

1. Breadcrumbs on Member pages
2. Breadcrumbs on Group pages
3. Admin page


== Other Notes == 


Dove photo credit: [Boegh](http://www.flickr.com/photos/boegh/5675587429/).


== Changelog ==

= 1.6 =
* Maintenance release, improved performance
* Fixed "Trying to get property of non-object" notice on line 39 in Debug Mode
* Fixed "Undefined variable: id" notice on lines 119, 286, 288, 292, 322 in Debug Mode
* Fixed "Undefined variable: groupactions" notice on line 194 in Debug Mode
* Fixed "Undefined property: WP_Error::$term_id" notice on line 323 in Debug Mode
* Fixed "Undefined property: WP_Error::$parent" notice on line 324 in Debug Mode
* Fixed "Undefined variable: prefix" notice on line 326 in Debug Mode
* Fixed "Undefined variable: display" notice on line 326 in Debug Mode
* Added title attribute to links
* Added Italian PO file in `/languages`

= 1.5 =
* Prep work for localization - suggested by [angslycke](http://wordpress.org/support/topic/translation-137) - thanks!
* Added German, French and Spanish PO files in `/languages`
* Added schema.org microdata - suggested by [miguelcortereal](http://wordpress.org/support/topic/microformats-compliant-would-be-a-great-improvement) - thanks!
* Current items on pages are now linked by default (for microdata structure)
* Changed relative links to absolute URLs in Groups chain (for microdata structure)
* Improved formatting for Groups default tab (i.e. Child Group > home = Child Group > Home)
* Improved compliance with WordPress PHP doc/code standards
* Moderate code rewrite
* Tested for BP 1.9

= 1.4 =
* Crumbs now display in title case on Member pages
* Tested for BP 1.7-beta1 

= 1.3 =
* Changed bp_has_profile() to bp_is_user() in crumbs-core.php
* Minor HTML formatting in crumbs-admin.php

= 1.2 =
* Crumbs now detect posts on home vs. static home page
* Removed Blog link if posts are on front
* Removed Members link from registration pages
* Added top-level crumbs on plugin pages
* Minor code cleanup

= 1.1 =
* Changed bp_init to bp_include in loader.php
* Updated plugin homepage URL in loader.php
* Improved formatting for paginated pages
* Crumbs now display on attachment posts and pages
* Level 5 actions on Groups now show by default
* Improved formatting for slug-based crumbs (i.e. Group > Send-invites = Group > Send Invites)
* Added compatibility for BP Group Hierarchy
* Added compatibility for Achievements for BuddyPress
* Added compatibility for multisite installations

= 1.0 =
* Initial release

== Installation ==

* Upload the `breadcrumbs-everywhere` folder to the `/wp-content/plugins/` directory
* Activate the plugin through the 'Plugins' menu in WordPress
* Add this function anywhere in your BuddyPress template, typically in header.php:
	
	`<?php if (function_exists('breadcrumbs_everywhere')) breadcrumbs_everywhere(); ?>`

* That's it!

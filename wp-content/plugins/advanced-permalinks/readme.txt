=== Advanced Permalinks ===
Contributors: johnny5
Donate link: http://urbangiraffe.com/about/support/
Tags: seo, permalinks, permalink, url, redirect, post, page, category
Requires at least: 2.0
Tested up to: 2.9.1
Stable tag: trunk

Allows multiple permalink structures and category-specific permalinks without needing redirects.

== Description ==

Provides advanced permalink options that allow you to:

* Have multiple permalink structures.  Permalinks can be assigned to posts or ranges of posts
* 301 redirect old permalink structures (many structures are allowed)
* Category-specific permalinks.  Posts in certain categories can be assigned a permalink structure
* No need to have a base to the category permalink!
* Change author permalinks
* Enable periods in permalinks - perfect for migrating old websites

All permalinks are real permalinks and do not result in 301 redirections.  *This means you can change your permalink structure without
affecting any existing posts and without losing any page rank.*  Any attempts to access posts in the wrong permalink structure will be
automatically redirected to the correct URL.

Advanced Permalinks is available in:
* English
* Bulgarian (thanks to Alexander Dichev)
* Belorussian (thanks to Marcis Gasuns)
* Russian (thanks to Slava Mikheev)
* Uzbekistan (thanks to Alexandra Bolshova)
* Lithuanian (thanks to Nata Strazda at Web Hub)

= Example 1: Migrating a permalink structure =

Say you have an existing site with the default WordPress permalink structure `/%year%/%monthnum%/%day%/%postname%/` and you decide you want to change it
to a more keyword-heavy `/%category%/%postname%/`.  If you change the permalink setting then all your old posts will be moved, and you will suffer a major loss
of page rank (not to mention a lot of 404s).  With Advanced Permalinks you can define a specific permalink structure for all your old
posts and then create a new permalink structure for new ones.  All your old posts will carry on living at the same URL as before, but all
new posts will be created using your new structure.

= Example 2: Category-specific permalinks =

Sometimes you want posts in a certain category to appear elsewhere on your site.  For example, your usual permalink structure may result in:

  /2007/05/02/my-review

However, you want posts in the 'review' category to appear as:

  /reviews/my-review

Using Advanced Permalinks this is not a problem.

== Installation ==

The plugin is simple to install:

1. Download `advanced-permalinks.zip`
1. Unzip
1. Upload `advanced-permalinks` directory to your `/wp-content/plugins` directory
1. Go to the plugin management page and enable the plugin
1. Configure the plugin from `Options/permalinks`

You can find full details of installing a plugin on the [plugin installation page](http://urbangiraffe.com/articles/how-to-install-a-wordpress-plugin/).

== Screenshots ==

1. Configure extra permalinks
2. Add post-specific permalinks
3. Create permalinks for categories

== Documentation ==

Full documentation can be found on the [Advanced Permalinks Page](http://urbangiraffe.com/plugins/advanced-permalinks/) page.

== Changelog ==

= 0.1.2  =
* First release

= 0.1.3  =
* Fix javascript errors

= 0.1.4  =
* Fix problem with file upload

= 0.1.5  =
* Add option to allow periods in URLs

= 0.1.6  =
* Preliminary support for .html in category base in WP 2.3

= 0.1.7  =
* Add 301 redirects

= 0.1.8  =
* Stop redirect loop

= 0.1.9  =
* Fix WP 2.3.1 problem, fix problem with 404s on category specific URLs, add Bulgarian translation

= 0.1.10 =
* Add debug page

= 0.1.11 =
* Fix missing 404 on category specific URLs on some hosts

= 0.1.12 =
* Update base plugin to fix path problem

= 0.1.13 =
* WP 2.5 fixes

= 0.1.14 =
* WP 2.7 styling, fix YARP issue

= 0.1.15 =
* Add Belorussian translation

= 0.1.16 =
* Add Russian & Uzbekistan translation

= 0.1.17 =
8 Remove deep slashes

= 0.1.18 =
* Update Russian translation

= 0.1.19 =
* Removed debug option
* Add Lithuanian

= 0.1.20 =
* Fix a load of PHP warnings
* General XSS cleanup

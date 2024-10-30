=== Plugin Name ===
Contributors: 
Donate link: 
Tags: dashboard, welcome panel, widgets, custom admin
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin registers a new sidebar widget to be used on the ADMIN SIDE ONLY. When active it replaces the WP Welcome Panel Dashboard Widget. Inspired by Dashboard Widget Sidebar, Dashboard Notes, and Magic Widgets. Completly "widgetize" your wordpress admin. 

== Description ==

This plugin aims to merge development of frontend/backend wordpress themes and further the goal of really making wordpress a CMS and not just a blogging tool. Coming from Drupal, Wordpress is extremly frustrating when trying to build a back end theme. The wordpress backend needs to become more user friendly for theme developers who aren't coding experts. This small plugins goal is to contribute to that. When used with such plugins like Dashboard Widget Sidebar, Dashboard Notes, Magic Widgets, admins are given complete control to build there admin interface in a very similar way that front end themes are build (BY USING WIDGETS). 

While there's really not that much too this plugin (as I'm not an expert coder myself), my hopes are that it will inspire better developers to take a more widget friendly approach to building admin interfaces. Building admin widgets gives us the opportunity to let designers take a stab at changing the administratoin interface. With such a large community the admin changes could have a lot more potential if we give designers and average users the ability to truely customize their entire site.

This plugin also adds a shortcode 'user' which lets you show and hide text in the welcome panel and thoughout your installation to different roles and capabilities. For example, you can add a text widget to the dashboard welcome panel widget like this:

[user capability="delete_posts"] This is only shown to users that have delete posts capability [/user]
[user capability="editor"] This is only shown to users that have editor capability [/user]

== Installation ==

This section describes how to install the plugin and get it working.

  
   From your WordPress dashboard

    1. Visit 'Plugins > Add New'
    2. Search for 'Custom Dashboard Welcome Panel Widget Sidebar'
    3. Install Custom Dashboard Welcome Panel Widget Sidebar
    4. Activate Custom Dashboard Welcome Panel Widget Sidebar from your Plugins page. 
    5. Go to "Appearance --> Widgets" page @ 'http://www.example.com/wp-admin/widgets.php'
    6. Add text widget or other widgets to new the Admin Dashboard Sidebar
    7. All Done. Your New dashboard welcome panel will now show.


== Frequently Asked Questions ==

= What widgets should I use in the new Admin Sidebar? =

Any widgets "should" work. However, if the registers scripts or styles for the frontend only then those will not show up in the admin interface. I reccomend using the text widget or better yet, do yourself a favor and install one or all of the following text widgets:

* https://wordpress.org/plugins/enhanced-text-widget (allows PHP, html, css, javascript, shortcodes, etc...)
* http://wordpress.org/plugins/wp-editor-widget/ (adds a rich text editor to the widgets)
* http://wordpress.org/plugins/spots/ (similar to wp-editor-widget excepts lets you manage from a custom post type which means it will import/export)

= Any other plugins/widgets that would work good in the welcome panel sidebar? =

* Shortcodes Ultimate -  lets you add things like tabs (which is the main screenshot).
* Jonradio Shortcodes Anywhere or Everywhere - lets you add shortcodes virtually anywhere, although you can already add to text widget shortcodes with this plugin.


= This plugin is cool, but I want more. Are there any similar plugins to this? =

Yes!

* [Dashboard Notes](http://wordpress.org/plugins/dashboard-notes/ "Dashboard Notes")
* [Magic Widgets](http://wordpress.org/plugins/magic-widgets/ "Magic Widgets") 
* [Dashboard Widget Sidebar](http://wordpress.org/plugins/dashboard-widget-sidebar/ "Dashboard Widget Sidebar")

= What's the point of this? =

Simple. To make the wordpress backend work more like the frontend. While this plugin merely consists of a few simple functions, I'm hoping it helps people to see the potential of editing the backend using widgets. As I discovered from Tochos Magic Widgets, changing the wordpress admin is as simple as adding widgets to different hook locations within the backend.



== Screenshots ==

1. "Appearance --> Widgets" page @ 'http://www.example.com/wp-admin/widgets.php'


== Changelog ==

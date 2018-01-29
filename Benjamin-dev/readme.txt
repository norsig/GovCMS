=== Benjamin ===

Requires at least: 4.5
Tested up to: 4.7
Stable tag: 1.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Copyright 2017 Kyle Jennings
Benjamin is distributed under the terms of the GNU GPL

== !! JS console error note !! ==
When navigating to the 404 section in the customizer, there is an intentional JS error:
"Failed to load resource: the server responded with a status of 404 (Not Found)"

This occurs because the customizer previewer is loading a non-existent page so the 404 page
can be previewed while be customized!

== Description ==

Benjamin is built with _s and the 18f US Web Design Standards.  The Web Design
Standards are a library of design guidelines and code to help government
developers and designers quickly create trustworthy, accessible, and consistent
digital government services.

Theme Demo: https://uswds.sites.usa.gov

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Customizer ==
* The following default settings have been removed as they are not implemented in this theme
** Colors - link and background colors are not configurable
** Background - Background wallpapers are not visible in this theme
** Custom Headers are not implemented.  Arguably a similar feature exists, but is implemented different and is also logically grouped in with the template settings sections.

== Documentation for site identity  ==
* The color scheme settings will change Benjamin's colors to a series of preset combinations.
* The sidebar size setting has 2 options, wide (1/3rd page) and narrow (1/4th)
* The logo is used for the navbar brand (if the navbar brand setting is changed.)

== Documentation for menus ==
* the menus only go 2 levels deep, the top level and a single dropdown

== Documentation for header settings and navbar ==
* The header order is a draggable, sortable setting which lets you select the position of the hero, navbar, and banner (banner is available if and only if your site domain is a .gov or .mil)
* Search location allows you to place a search field in the navbar
* You can change the navbar color scheme from light (default) to dark (kind of inverted)
* The navbar can be set to stick to the top of the window when scrolling down
* As mentioned in the site identity section, the brand can be set from text (default) to the logo

== Documentation for templates setup ==
* There are template which can be configured: the feed (default), frontpage, single post, single page, and widgetized page
* Each template can be activated to override the feed (default) template settings
* The hero image can be set
* the hero size can be set to predefined sizes include a fullscreen size
* the position can be hidden, or set to th left or right of the page
* the sizebar's visibility can be hidden or shown on different screen sizes

== Documentation for frontpage setup ==
* The frontpage has 2 extra settings
* the "hero callout" button can be set to point to a specific page
* There are draggable, sortable widget areas which can be ordered
* 3 widget area rows
* a row to display the page contents


== Documentation for widgetized page ==
* There are draggable, sortable widget areas which can be ordered
* Sortables include:
* 3 widget area rows
* a row to display the page contents


== Documentation for footer settings ==
* There are draggable, sortable widget areas which can be ordered
* Sortables include:
* a return to top row
* a footer menu row (set by the "footer" menu location)
* and 2 widget area rows


== Copyrights and License ==

Unless otherwise specified, all the theme files, scripts and images are licensed
under GPLv2 or later

== Credits ==

* Underscores
http://underscores.me/
(C) 2012-2016 Automattic, Inc.
License: [GPLv2 or later]
URL: https://www.gnu.org/licenses/gpl-2.0.html


* US Web Design Standards (USWDS)
(USWDS) v1.2.0 (https://standards.usa.gov/)
Mixed License (https://github.com/18F/web-design-standards/blob/develop/LICENSE.md)


*  This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

== Changelog ==

* 1.2
* namespaced all functions, classes, and constants
* properly sanitized all customizer and settings API
* replaced the screenshot
* included unminified JS alongside the minified JS
* added support for custom post types
* added support for co-authors plus plugin
* moved contact settings to Franklin as customizer settings
* changed footer settings to sortable components
* Choose your 404 page content

* 1.3
* re-namespaced everything to use theme slug, and not the uswds acronymn
* added options to hide parts of a given page

* 1.4
* added some additional settings to the 404 page
* added permalink to the hero area featured post title
* fixed a JS bug in the customizer caused by using 404 as an array index
* fixed the preview for changing the sidebar width
* used built in customizer settings for my layout activate setting
* added some toggles to the various customizer fields
* added styles for CF7 validations
* prepped settings for the eventual hero area video BGs

* 1.5
* Video hero (header) backgrounds now work
* refactored hero functions into a class
* cleaned up files
* fixed some bugs
* customizer 404 section opens a non-existent page for styling
* added labels to customizer section groups

* 1.6
* fixed some debug warnings

Bootstrapwp - TWITTER BOOTSTRAP for WordPress
=================

Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

**Latest version release: .6 (12/24/2011)**

Version .6 Change Log
----

* Corrected callback function name in comments template
* Added comments template to single.php
* Modified top nav bar to have relative positioning to allow better viewing along with the WordPress Admin bar
* Moved breadcrumbs above page titles
* Fixed formatting on archive pages
* Fixed subnav drop-downs with customWalkerclass and css
* Moved bootstrap.css to the lib directory
* Created new LESS file wordpress.css for all Bootstrap style modificiations and WordPress specific styles
* Updated all Bootstrap LESS style files and JS script files for improved responsiveness and style tweaks
* Added pagination to bottom of single.php
* Created function to customize link for the_excerpt
* Removed extra /div from full-width template
* Bug fix: replaced get_bloginfo(url) in functions.php with home_url() function call


Demo
----
You can view a demo of this theme running on WordPress at:  [http://rachelbaker.me/bootstrapwp/](http://rachelbaker.me/bootstrapwp/)

View the theme style guide at: [http://rachelbaker.me/bootstrapwp/style-guide/](http://rachelbaker.me/bootstrapwp/style-guide/)




Usage
-----

Download the Bootstrapwp theme, and install to your WordPress site.

This is meant to be a base theme for WordPress custom theme development.  




Bug tracker
-----------
**Report additional bugs** [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues)


**Known theme bugs:**

* 404.php needs formatting fix
* Search.php needs formatting fix
* REQUIRED: This theme doesn't seem to display tags. Modify it to display tags in appropriate locations.
* REQUIRED: No content width has been defined. Example:
if ( ! isset( $content_width ) ) $content_width = 900;
* REQUIRED: .wp-caption css class is needed in your theme css.
* REQUIRED: .wp-caption-text css class is needed in your theme css.
* REQUIRED: .sticky css class is needed in your theme css.
* REQUIRED: .gallery-caption css class is needed in your theme css.
* REQUIRED: .bypostauthor css class is needed in your theme css.
* REQUIRED: .alignright css class is needed in your theme css.
* REQUIRED: .alignleft css class is needed in your theme css.
* REQUIRED: .aligncenter css class is needed in your theme css.
* RECOMMENDED: Text domain problems in functions.php. You have not included a text domain!
Line 408: echo __('Page') . ' ' . get_query_var('paged');
* RECOMMENDED: Screenshot is wrong size! Detected: 1072x647px. Maximum allowed size is 320x240px.
* RECOMMENDED: No reference to post-thumbnails was found in the theme. If the theme has a thumbnail like functionality, it should be implemented with add_theme_support( 'post-thumbnails' )in the functions.php file.
* RECOMMENDED: No reference to the_post_thumbnail() was found in the theme. It is recommended that the theme implement this functionality instead of using custom fields for thumbnails.
* RECOMMENDED: No reference to add_editor_style() was found in the theme. It is recommended that the theme implement editor styling, so as to make the editor content match the resulting post output in the theme, for a better user experience.
* RECOMMENDED: No reference to add_custom_image_header was found in the theme. It is recommended that the theme implement this functionality if using an image for the header.
* RECOMMENDED: No reference to add_custom_background() was found in the theme. If the theme uses background images or solid colors for the background, then it is recommended that the theme implement this functionality.
* RECOMMENDED: Tags: is either empty or missing in style.css header.

**Have a bug? Please create an issue here on GitHub!**




Thanks to the Original Twitter Bootstrap Authors
-----------------------

**Mark Otto**

+ http://twitter.com/mdo
+ http://github.com/markdotto

**Jacob Thornton**

+ http://twitter.com/fat
+ http://github.com/fat


Copyright and license
---------------------


Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the LICENSE file, or at:

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

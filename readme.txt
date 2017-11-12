=== Head and Footer Scripts Inserter ===
Contributors: Arthur Gareginyan
Tags: inject, insert, insert scripts, insert javascript, insert js, insert html, insert css, insert custom scripts, insert custom code, html, javascript, js, css, code, custom code, script, scripts, custom scripts, meta, meta tags, head, header, head section, head area, footer, footer section, footer area,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.9
Stable tag: 4.14
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily add your scripts to the WordPress website's head and footer sections. This is a must have tool for authors and website's owners.


== Description ==

An easy to use, with intuitive interface, WordPress plugin that gives you the ability to easily insert custom scripts (HTML, JavaScript, and CSS) in the head or/and footer section of your website.

No need anymore to editing a files of your theme or plugins in order to add custom scripts (HTML with JavaScript, CSS and else). You can add they on the plugin settings page. Just add your scripts in the field on the plugin settings page and this plugin will do the rest for you. It adds required scripts to the head section of your website automatically, without changing any of your themes file and without slowing down your website. It's really useful in case of any theme update, because your scripts would never be lost! Your scripts will keep on working, no matter how many times you upgrade or switch your theme and plugins.

Third-party services like Google Webmaster Tools, Alexa, Pinterest and Google+ require you to verify your domain. This makes sure that you are the correct owner of your blog or store before they provide their services to you. You can use this plugin to easily verify your website or domain and get a more effective and efficient sharing results. Example with Pinterest. Once you completed the verification process, people will see a checkmark next to your domain in your Pinterest profile and in pinner search results. That check mark emphasis you have confirmed the ownership of your blog or website on Pinterest. This will help your website to rank better in google and other search engines. You can easily increase your blog traffic using this plugin. "Head and Footer Scripts Inserter" is a simple but effective SEO plugin.

If you want more options then tell me and I will be happy to add it.

**Features**

* Lightweight and fast
* Secure code with using clear coding standards
* Intuitive interface with many settings
* Cross browser compatible (work smooth in any modern browser)
* Compatible with all WordPress themes
* RTL compatible (right to left)
* Translation ready

**Key features include...**

* Inserts scripts in beginning or/and end of <head> tag
* Inserts scripts in beginning or/and end of footer
* And much, much more!

**Translation**

This plugin is ready for translation and has already been translated into several languages.

* English (default)
* Russian (translation by [Milena Kiseleva](https://www.instagram.com/milava_kiseleva/))
* German (translation by Michael)
* Polish
* Spanish (translation by Patricio Toledo)

If you want to help translate this plugin then please visit the [translation page](https://translate.wordpress.org/projects/wp-plugins/header-and-footer-scripts-inserter).

**Supported**

* HTML
* JavaScript (in HTML tag)
* CSS (in HTML tag)

**System requirements**

* [PHP](https://php.net) version **5.2** or higher.
* [MySQL](https://www.mysql.com) version **5.0** or higher.

**Recommendations:**

* [PHP](https://php.net) version **7.0** or higher.
* [MySQL](https://www.mysql.com) version **5.6** or higher.

**Contribution**

Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to:

* [Donate](https://www.arthurgareginyan.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
* [Rate and Review](https://wordpress.org/support/view/plugin-reviews/header-and-footer-scripts-inserter?rate=5#postform) this plugin.
* [Share with me](mailto:arthurgareginyan@gmail.com) or view the [GitHub Repo](https://github.com/ArthurGareginyan/header-and-footer-scripts-inserter) if you have any ideas or suggestions to make this plugin better.


== Installation ==

Install "Head and Footer Scripts Inserter" just as you would any other WordPress Plugin.

Automatically via WordPress Admin Panel:

1. Log into Admin Panel of your WordPress website.
2. Go to "`Plugins`" -> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manually via FTP access:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log into Admin Panel of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation and activation, the "`Scripts Inserter`" menu item will appear in the "`Settings`" section of Admin Panel. Click on it in order to view the plugin settings page.

[More help installing plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==

= Q. Will this plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.

= Q. Can I use this plugin on my language? =
A. Yes. This plugin is ready for translation and has already been translated into several languages. But If your language is not available then you can make one. The POT file is included and placed in the "`languages`" folder. Just send the PO file to me at the arthurgareginyan@gmail.com and I will include this translation within the next plugin update. Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!

= Q. How does it work? =
A. Simply go to the plugin settings page, place your scripts in the field and click the "Save changes" button. Enjoy the result of applying your scripts. It's that simple!
You can find the plugin settings page at "`WP Admin Panel`" -> "`Settings`" -> "`Scripts Inserter`".

= Q. How much of scripts I can enter in the field? =
A. I don't limit the number of characters.

= Q. Does this plugin requires any modification of the theme? =
A. Absolutely not. This plugin is configurable entirely from the plugin settings page that you can find in the Admin Panel of your WordPress website.

= Q. Does this require any knowledge of HTML or CSS? =
A. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.

= Q. Can I add my script to a specific page of my website? =
A. For now, this plugin does not have an option to apply the custom scripts only on specific pages. I plan to add this feature soon. But for now in order to apply your script only on specific pages of your website, you need to wrap your script in a PHP code that will determine the page you want. You need something like this:
`function my_custom_script() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // Print the script
    echo '<script>YOUR SCRIPT</script>';
}
add_action( 'wp_head', 'my_custom_script' );`

To apply the PHP code on a website, I can recommend you to use another my plugin called [My Custom Functions](https://wordpress.org/plugins/my-custom-functions/).

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is a web browser's cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser's cache.​ Clearing your browser's cache may solve the problem.

It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, I'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. The last WordPress update is preventing me from editing my website that is using this plugin. Why is this? =
A. This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website's cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.

= Q. Where to report bug if found? =
A. Please visit the [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/header-and-footer-scripts-inserter) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Any suggestions are very welcome! Please send me an email to [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com). Thank you!

= Q. I love this plugin! Can I help somehow? =
A. Yes, any financial contributions are welcome! Just visit [my website](https://www.arthurgareginyan.com/donate.html), click on the donate button, and thank you!


== Screenshots ==

1. Plugin page.
2. Plugin page with Google Tag Manager code added.
3. Plugin page with Google Analytics tracking code added.


== Other Notes ==

****

"Head and Footer Scripts Inserter" is one of the personal software projects of [Arthur Gareginyan](https://www.arthurgareginyan.com). Earlier the project was called "Header and Footer Scripts Inserter".

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

* The icon of plugin is a copyrighted image created by [Arthur Gareginyan](https://www.arthurgareginyan.com). (C) All rights reserved.
* The banner of plugin is a copyrighted image created by [Arthur Gareginyan](https://www.arthurgareginyan.com). (C) All rights reserved.
* [CodeMirror](https://codemirror.net/) is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).
* [Bootstrap](http://getbootstrap.com) by Twitter, Inc. released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).

**Links**

* [Developer Website](https://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/header-and-footer-scripts-inserter)


== Changelog ==

= 4.14 =
* The plugin is fully tested for compatibility with WordPress version 4.9.
* CSS code improved.

= 4.13 =
* German translation added. (Thanks to Michael)
* Spanish translation updated. (Thanks to Patricio Toledo)
* Fixed an issue where the "Hello" message could not be hidden.

= 4.12 =
* At the request of some users, plugin settings page moved to the submenu item in the top-level menu item "Settings", like before.

= 4.11 =
* Fixed the issue due tof which the 'Space X-Chimp' sub menu item in the brand menu item was displayed.
* Added branded footer text on the plugin's settings page.
* Text of copyright in the output code is updated.

= 4.10 =
* Error in the PHP constant name fixed.

= 4.9 =
* Added the top level menu item of the brand.
* The submenu item of the plugin has moved to the menu item of the brand.
* The menu item of the plugin is renamed.
* The "Author" tab on the settings page is removed.
* Content of the "Support" tab on the settings page is updated.
* Copyright of plugin files is changed to the "Space X-Chimp Studio".
* The "Support" tab renamed to the "Support Me".
* The "Usage" tab renamed to the "Usage Instructions".

= 4.8 =
* Plugin data that saved in the database upgraded to version 0001.

= 4.7 =
* Added Spanish translation. (Thanks Patricio Toledo)
* The group name of the '_service_info' option renamed to '_settings_group_si'.
* The 'admin.css' file improved.
* The "Font Awesome" library is integrated for use on the plugin settings page.
* Prefixes of the PHP functions changed to ''spacexchimp_p006_.
* Prefixes of the PHP constants changed to ''SPACEXCHIMP_P006_.

= 4.6 =
* Russian translation updated. (Thanks to Milena Kiseleva)
* The navigation of the tabs is rearranged.
* Fixed an issue due to which the sidebar was not hiding on mobile devices.
* Code of sidebar moved to separate file 'sidebar.php'.
* Support page tab moved from external source to plugin code.
* My avatar moved from external source to plugin folder.
* Banner moved from external source to plugin folder.
* Code of PayPal button updated.

= 4.5 =
* Stylesheet in the admin.css file improved.
* The '!important' declarations in the admin.css file removed.
* Code formatting in the admin.js file improved.
* Code commenting improved.
* Load of the additional remote CSS file removed from the admin.js file.
* Changed the sorting of enqueueing of scripts.
* The ''Family' page tab renamed to 'Store'.
* Added ad banner of my store website.

= 4.4.1 =
* The HTTPS mixed content issue fixed by changing all links to HTTPS.
* Content of the "FAQ" section updated.

= 4.4 =
* On the plugin settings page, text of buttons are corrected.
* On the plugin settings page, the information about the plugin version number moved to header section.
* Some mention of constants replaced with variables for easier access.
* Content of the "Usage" tab updated.
* Content of the "FAQ" tab updated.
* Added load of the jQuery library on the plugin settings page.

= 4.3 =
* To the plugin settings page added information about the plugin version number.
* The "Tested up to:" comment changed to 4.8 after full testing process.
* The "version.php" file renamed to "versioning.php".
* The "versioning.php" file updated to new version.
* The "_plugin_version_number" function renamed to the "_versioning".

= 4.2 =
* Compatibility with PHP version 5.2 improved.
* PHP shorthands improved.
* Added function for generating the plugin constants.
* Some constants now get the value from the plugin header data.
* The "_plugin_version_number" function improved.
* Added file "upgrade.php" for future upgrades.

= 4.1.1 =
* Fixed the bug due to which the "Warning: Constants may only evaluate to scalar values in" warning are displayed.

= 4.1 =
* Added new constants: "_SLUG", "_PREFIX", "_SETTINGS" and "_NAME".
* Value of the "_VERSION" constant replaced with information from the plugin header data.
* All references to the plugin name, slug, prefix are replaced with constants.
* The "name" attribute removed from the "form" tag.
* Code formatting improved.
* F.A.Q. section updated.

= 4.0.1 =
* Fixed the bug due to which the the "Warning: Illegal string offset 'version' in" and the "Warning: Illegal string offset 'old_version' in" warnings are displayed. (Thanks to Sven Brill)

= 4.0 =
* The design of the plugin settings page is completely redone.
* Added additional donate link to the "Plugins" page.
* Readme for translations updated.
* Advertisement banner removed.
* The 'Using' section renamed to 'Usage'.
* My Unicode signature added to the main file.
* The donate button replaced with new.
* The 'Donate' section renamed to 'Support'.
* The 'donate.png' image removed.
* Options from the settings page moved to a separate file.
* The "Usage" section removed from the sidebar area.
* Added stylized descriptions of sections on the "Settings" tab.
* Additional "Support" section added.
* Added tab navigation menu for the settings page.
* Added additional tabs on the settings page.
* Code of the 'admin.css' file improved and better commented.
* On the plugin settings page the help-texts relocated.
* A full version of the Bootstrap framework is integrated.
* The 'HFScriptsIns_load_scripts' function renamed to 'HFScriptsIns_load_scripts_admin'.
* Added the CSS code for the custom list numbers on the plugin settings page.
* The main font is changed to "Verdana".
* All PHP and HTML code is better formatted.
* The header on the settings page of plugin is redesigned.
* The "LICENSE.txt" file renamed to "license.txt".
* The "humans.txt" file added.
* Messages from the plugin settings page moved to a separate file "messages.php".
* The "_service_info" setting added to the data-base.
* Added function for managing information about the version number of the plugin.
* Added the "Hello" message that show when the plugin is just installed.
* Added the "Error" message that show when user is trying to degrade the version number of the plugin.
* Fixed the parameter that contain the path to source files in all translation files.
* The POT file updated.
* Translations updated.

= 3.3 =
* Added the Readme.txt file for translation contribution.
* Added global constant for plugin text-domain.
* Translations updated.
* Ad banner replaced with new.

= 3.2 =
* Added prefixes to the stylesheet and script names when using wp_enqueue_style() and wp_enqueue_script().
* Added constant for storing the plugin version number.

= 3.1 =
* Style sheet of settings page improved and better commented.
* The "main.js" file renamed to "admin.js".
* JS code improved.

= 3.0.2 =
* Added improved section with using explanation to plugin settings page.
* admin.css improved.

= 3.0.1 =
* POT file updated.
* Russian translation updated.
* Polish translation updated.
* Image "thanks.png" removed.
* Advertisement replaced by new.
* Added the subject with plugin name to email address on settings page.

= 3.0 =
* Plugin renamed to "Head and Footer Scripts Inserter".
* Styles of settings page optimized for mobile devices.
* Added the syntax highlighting (by CodeMirror).
* Added line numbering.
* Added active-line add-on to CodeMirror.
* Removed the default message about successful saving.
* Added the custom message about successful saving.
* Added function of automatic remove the "successful" message after 3 seconds.
* Added function of automatic add the missing lines to get 10 lines.
* The _output function optimized.
* The "images" catalog renamed to "img".
* The CodeMirror library moved to "lib" catalog.
* The style.css file renamed to admin.css and moved to "css" catalog.
* The main.js moved to "js" catalog.
* The page.php file moved to "php" catalog.

= 2.0 =
* Fixed: "Use of undefined constant header_beginning - assumed 'header_beginning' in page.php".
* Fixed: "Use of undefined constant header_end - assumed 'header_end' in page.php".
* Fixed: "Use of undefined constant footer_beginning - assumed 'footer_beginning' in page.php".
* Fixed: "Use of undefined constant footer_end - assumed 'footer_end' in page.php".
* Some changes in design of settings page.
* Constants variables added.
* Text domain changed to "header-and-footer-scripts-inserter".
* Added compatibility with the translate.wordpress.org.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.
* Plugin URI changed to GitHub repository.
* Added my personal ad about freelance.
* .pot file updated.

= 1.2 =
* Added Polish translation. (Thanks Paweł K.)
* Localization improved. (Thanks Paweł K.)
* POT file updated. (Thanks Paweł K.)

= 1.1 =
* Added Russian translation.
* Localization improved.

= 1.0 =
* Initial release.
* Added ready for translation (.pot file included).

= 0.3 =
* Release candidate.

= 0.2 =
* Beta version.

= 0.1 =
* Alpha version.


== Upgrade Notice ==

= 4.0 =
Please update to new release!

= 3.0 =
Please update to new release!

= 2.0 =
Please update to new release!

= 1.0 =
Please update to first stable release!

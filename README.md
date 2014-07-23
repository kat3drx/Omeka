
#Omeka_a11y readme

This is an accessible fork of the Omeka 2.x stable branch and core themes. 
Omeka is &copy; the Roy Rosenzweig Center for History and New Media. This fork
makes enhancements to their existing code, available in the main Omeka 
repository.

##Accessibility enhancements in Omeka 2.0.x version:
* "Web Accessibility" file element set that includes an alternative text element. This element set will allow for the association of a short
description meant specifically to describe the visual aspects of an image file to a disabled user.  [See W3C's description of how to use alt 
text.] (http://www.w3.org/TR/2012/NOTE-WCAG20-TECHS-20120103/H37)

* Updated the file markup code to defer to the alt text element value for alt text on images.

* The theme logo, when used, has had alt text added. Due to its purpose, its current alt text is automatically set to consist of "SITE logo"
where SITE is the name of the site, as defined in the admin user interface. To remain accessible, the logo must not consist of any text that
is not the same text as the site's name.

* A core stylesheet called "accessibility.css," where all global CSS classes that aide accessibility can be added. Currently contains a class
to hide content that is meant to be for screen readers only.

* Added accessible labels to checkbox and radio button element markup. 

* Added label to search form text field.

* Removed redundant link titles from image file output.

* Edited core front-end themes ("Berlin," all color variations for "Seasons," and "Thanks, Roy") for accessibility.  Changes include:
	* Color contrast edits for users with color-perception disabilities.
	* Link focus styles for keyboard users.
	* Underlining all links except for h1 links for callout against other areas of text.
	* Removal of redundant hidden heading that invalidates heading structure on search box in default theme.

* Added landmark roles to core themes.

* Added "Skip to content" and "Skip to search" links to core themes.  "Skip to search" consists of a JS-empowered
version, which puts the user directly into the search box upon activating the link, and a non-JS version, which
puts the user directly before the search box. The version used is selected based on the availability of
Javascript in the active user agent.

##Additional accessibility enhancements in Omeka 2.2.x version:

In addition to the above accessibility enhancements, the following additional enhancements have been made: 

* Removed initial rollback pagination controls (unordered lists, from Omeka 1.5).  Added formId as a variable for pagination controls and fed unique form field IDs to text input fields for pagination controls.

* Added themable link-focus styles in core accessibility CSS.

* Added Emiglio theme, with accessibility fixes

##Potential future enhancements

* Allow the theme logo's alt text to be specified in the admin interface.

* Employing text equivalents for rich media items.

* Additional enhancements to pagination controls.


We now return you to your regularly scheduled Omeka Readme.

# Welcome to Omeka

&copy; 2008-2012 [Roy Rosenzweig Center for History and New Media](http://chnm.gmu.edu/)

This program is free software: you can redistribute it and/or modify it under 
the terms of the GNU General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program. If not, see [http://www.gnu.org/licenses/](http://www.gnu.org/licenses/).

Omeka includes:

* [Zend Framework](http://framework.zend.com)
* [getID3](http://getid3.sourceforge.net)
* [jQuery](http://jquery.com)
* [jQuery UI](http://jqueryui.com)
* [TinyMCE](http://tinymce.moxiecode.com)
* [Silk Icons](http://www.famfamfam.com/lab/icons/silk/)

Use and modifications of these libraries must comply with their respective 
licenses.

Release notes for Omeka are available at
[http://omeka.org/codex/Release_Notes](http://omeka.org/codex/Release_Notes).

=== WP-Lightform ===
Contributors: artflutter 
Donate link: http://artflutter.com/wp-lightform#donate
Tags: contact form, contact, form, email, AJAX, PHP, spam, validation, niceform, formcheck, mootools, lightform
Requires at least: 2.5.1
Tested up to: 2.5.1
Stable tag: 0.4

WP-LightForm, the prettiest WordPress contact form.

== Description ==

WP-LightForm is an AJAX / PHP contact form with spam protection, form validation and custom form elements.

This plugin is based on LightForm by [Jeeremie](http://web-kreation.com/blog/?p=71 "Web-Kreation"), and utilises [FormCheck](http://moo.floor.ch/ "Mootools Floor") for form validation and [Niceforms](http://www.badboy.ro "badboy.media.design") for custom form elements.

To get a feel for what WP-LightForm is really about, [try the interactive demo](http://www.artflutter.com/beta/wp-lightform/ "WP-LightForm Interactive Demo").

== Installation ==

1. Download the latest copy of [WP-LightForm](http://artflutter.com/wp-lightformfrom "WP-LightForm at Art Flutter) and extract the archive (If you're reading this then you have probably already done it).
2. Open send.php with a text editor and enter the email address you would like to use as the recipient of the contact form in the $to parameter.
3. Upload the wp-lightform directory to your WordPress installation's wp-content/plugins/ directory.
4. Go to the Plugins page in your WordPress Administration area and click 'Activate' for WP-LightForm.
5. Enter the shortcode [LightForm] in the WordPress post/page you would like to display the contact form.

== Frequently Asked Questions ==

= How can I modify the layout of the contact form? =

At the core of WP-LightForm is a XHTML Form element, to add or modify elements you can change the $formoutput string in lightform.php as you would a normal XHTML document.  To modify the css styles to better suit your site you will need to change css/lightform.css.

= What browsers do you support? =

Testing has been done in Firefox 2 along with Internet Explorer 6 & 7.  Theoretically it should work on any javascript enabled browser, if not let me know by [leaving a comment](http://artflutter.com/wp-lightform).  

= Does WP-LightForm only work on WordPress 2.5.1 and later? =

Good question, my testing concludes that it definitely does work in version 2.5.1.  Anything above and below that is untested, so if you decide to give this plugin a try on any other version please let me know how it went by [leaving a comment](http://artflutter.com/wp-lightform).

== Screenshots ==

1. WP-LightForm in use.

== Changelog ==

* Version 0.4
	+ Formcheck image pre-loading disabled in Internet Explorer as images were appearing at the top of the screen.

* Version 0.3
	+ AJAX message sending now works successfully with Internet Explorer 6 & 7.
	+ utf-8 encoding of the email to support international characters.
	+ Recipient email address is now to be added directly to send.php for security reasons.
	+ CSS modified to hide the scrollbar in the textarea for Internet Explorer 6 & 7.
	+ CSS styled form elements to avoid conflicts with theme defaults.
	+ Fixed pre-loading of formcheck images in everything but Internet Explorer 6.
	+ Fixed message textarea appearing above message label in Internet Explorer 6 & 7.
	+ New Success / Fail images courtesy of [~dimpoart](http://dimpoart.deviantart.com/art/128x128-Icons-Set-4-51330659).

* Version 0.2
	+ Niceforms upgraded from 0.9 to [1.0](http://www.badboy.ro/articles/2007-01-30/niceforms/).
	+ FormCheck upgraded from 1.2 to [1.3](http://mootools.floor.ch/?p=22).
	+ [PNG Crushed](http://pmt.sourceforge.net/pngcrush/) FormCheck images down from 283kb to 8.7kb.
	+ XHTML of form modified so the plugin is now [XHTML 1.0 transitional](http://validator.w3.org/check?uri=http%3A%2F%2Fwww.artflutter.com%2Fbeta%2Fwp-lightform%2F&charset=%28detect+automatically%29&doctype=Inline&group=0).
* Version 0.1
	+ Initial release
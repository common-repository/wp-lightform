<?php
/*
Plugin Name: WP-LightForm
Plugin URI: http://artflutter.com/wp-lightform
Description: WP-LightForm, the prettiest WordPress contact form
Version: 0.4
Author: Alex Rogers
Author URI: http://www.artflutter.com
*/


	define('LIGHTFORM_BASEURL', get_bloginfo('wpurl') . '/wp-content/plugins/wp-lightform/');
	define('LIGHTFORM_ACTION', LIGHTFORM_BASEURL . 'send.php');
	define('LIGHTFORM_NICEFORMS', LIGHTFORM_BASEURL . 'js/niceform/images/');
	define('LIGHTFORM_BLOGNAME', get_bloginfo('name'));

	function lightform_wpinit() {
		add_action('wp_head', 'lightform_css');
		add_action('init', 'mootools_init');
		add_shortcode('LightForm', 'lightform_body');
	}

	function lightform_body() {
		//The actual form
		$formoutput = "
			<!-- WP-LightForm Form -->
			<form name=\"lightform\" method=\"post\" class=\"niceform\" id=\"lightform\" action=\"" . LIGHTFORM_ACTION . "\">

				<input type=\"hidden\" name=\"niceformimagepath\" id=\"niceformimagepath\" size=\"200\" value=\"" . LIGHTFORM_NICEFORMS . "\" />
				<input type=\"hidden\" name=\"blogname\" size=\"40\" value=\"" . LIGHTFORM_BLOGNAME . "\" />

				<label for=\"name\"><span class=\"blue\">*</span> Name : </label>
					<input id=\"name\" name=\"name\" size=\"20\" class=\"validate['required','length[2,-1]','nodigit']\" />

				<label for=\"fromemail\"><span class=\"blue\">*</span> Email : </label>
					<input id=\"fromemail\" name=\"fromemail\" size=\"20\" class=\"validate['required','email']\" />

				<label for=\"website\">Website : </label>
					<input id=\"website\" name=\"website\" size=\"20\" class=\"validate['url'] textinput\" />

				<label for=\"subject\"><span class=\"blue\">*</span> Subject : </label>
					<input id=\"subject\" name=\"subject\" size=\"20\" class=\"validate['required','length[3,-1]']\" />

				<label for=\"message\"><span class=\"blue\">*</span> Your message : </label><span></span>
					<textarea id=\"message\" name=\"message\" rows=\"10\" cols=\"30\" class=\"validate['required']\"></textarea>

				<label for=\"spamcheck\"><span class=\"blue\">*</span> Are you human? : <span class=\"blue\">4 + 3 = ???</span></label>
					<input id=\"spamcheck\" name=\"spamcheck\" size=\"5\" class=\"validate['required','number','spamcheck']\" />

				<br /><br />
				<input type=\"submit\" value=\"Send it!\" />
					<a class=\"poweredby\" href=\"http://artflutter.com/wp-lightform\">Powered by WP-LightForm</a>

				<div id=\"log\">
					<div id=\"log_res\">
					</div>
				</div>
			</form>
		";

		//Load Javascripts last
		$javascripts = "
			<!-- WP-LightForm Javascript -->
			<script type=\"text/javascript\" src=\"" . LIGHTFORM_BASEURL . "js/lightform.js\"></script>
			<script type=\"text/javascript\" src=\"" . LIGHTFORM_BASEURL . "js/formcheck/formcheck.js\"></script>
			<script type=\"text/javascript\" src=\"" . LIGHTFORM_BASEURL . "js/niceform/niceforms.js\"></script>
		";

		//Print the Form to screen
		return $formoutput . $javascripts;
	}

	//LightForm Css
	function lightform_css() {
		echo '<link rel="stylesheet" type="text/css" media="screen" href="' . LIGHTFORM_BASEURL .  'css/lightform.css" />' . "\n";
		echo '<link rel="stylesheet" type="text/css" media="screen" href="' . LIGHTFORM_BASEURL .  'js/niceform/niceforms-default.css" />' . "\n";
		echo '<link rel="stylesheet" type="text/css" media="screen" href="' . LIGHTFORM_BASEURL .  'js/formcheck/theme/lightform/formcheck.css" />' . "\n";
	}

	//As mootools is a commonly used library it is enqueued properly
	function mootools_init() {
		wp_enqueue_script('mootools', '/wp-content/plugins/wp-lightform/js/mootools.js', false, '1.11' );
	}
	
	lightform_wpinit();
?>
<?php
/*
Plugin Name: Admin Header Footer
Description: Add any code to the header and footer of the GetSimple control panel
Version: 1.0
Author: Chris Cagle
Author URI: http://www.cagintranet.com/
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
$ahf_file=GSDATAOTHERPATH .'header-footer.xml';

# register plugin
register_plugin(
	$thisfile, 													# ID of plugin, should be filename minus php
	'Admin Header Footer', 									# Title of plugin
	'1.0', 															# Version of plugin
	'Chris Cagle',											# Author of plugin
	'http://www.cagintranet.com/', 			# Author URL
	'Add any code to the header and footer of the GetSimple control panel', 	# Plugin Description
	'theme', 													# Page type of plugin
	'ahf_show'  										# Function that displays content
);

# hooks
add_action('header','ahf_header');
add_action('footer','ahf_footer');
add_action('theme-sidebar','createSideMenu',array($thisfile,'Admin Header Footer')); 

# get XML data
if (file_exists($ahf_file)) {
	$x = getXML($ahf_file);
	$ahf_header = stripslashes(htmlspecialchars_decode($x->header, ENT_QUOTES));
	$ahf_footer = stripslashes(htmlspecialchars_decode($x->footer, ENT_QUOTES));
} else {
	$ahf_header='';
	$ahf_footer='';	
}
	
# only show css on the plugin page	
if (@$_GET['id']===$thisfile) {
	add_action('header','ahf_css','');
}


#functions
function ahf_header() {
	global $ahf_header;
	eval("?>" . $ahf_header . "<?php ");
}

function ahf_footer() {
	global $ahf_footer;
	eval("?>" . $ahf_footer . "<?php ");
}

function ahf_css() {
	echo '
	<!-- for Admin Header Footer plugin -->
	<style type="text/css">
		textarea.shorttext{height:200px;font-family:monospace;font-size:12px;line-height:15px;}
	</style>
	';
}

function ahf_show() {
	global $ahf_header;
	global $ahf_footer;
	global $ahf_file;
	global $i18n;
	
	// submitted form
	if (isset($_POST['submit'])) {
		$ahf_header = htmlentities($_POST['ahf_head'], ENT_QUOTES, 'UTF-8');
		$ahf_footer = htmlentities($_POST['ahf_foot'], ENT_QUOTES, 'UTF-8');
		
		$xml = @new SimpleXMLElement('<item></item>');
		$xml->addChild('header', $ahf_header);
		$xml->addChild('footer', $ahf_footer);
		
		if (! $xml->asXML($ahf_file)) {
			$error = $i18n['CHMOD_ERROR'];
		} else {
			$x = getXML($ahf_file);
			$ahf_header = stripslashes(htmlspecialchars_decode($x->header, ENT_QUOTES));
			$ahf_footer = stripslashes(htmlspecialchars_decode($x->footer, ENT_QUOTES));	
		}
	}
	
	?>
	<h3>Admin Header Footer</h3>
	<form method="post" action="<?php	echo $_SERVER ['REQUEST_URI']?>">
		<p><b>Code for Header</b>:<br /><textarea name="ahf_head" class="shorttext" ><?php echo @$ahf_header; ?></textarea><br />
		<span class="hint">"Header" should only include code to be shown within the &lt;head> tag or PHP code</span></p>
		<p><b>Code for Footer</b>:<br /><textarea name="ahf_foot" class="shorttext" ><?php echo @$ahf_footer; ?></textarea><br />
			<span class="hint">"Footer" can echo any text or run any javascript or PHP code</span></p>
		<p><input type="submit" id="submit" class="submit" value="Save Header/Footer Code" name="submit" /></p>
	</form>
	
	<?php
}

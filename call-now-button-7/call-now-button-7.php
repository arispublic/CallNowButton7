<?php
/*
Plugin Name: Call Now Button 7
Plugin URI: http://aris.pituruh.com
Description: Mobile visitors will see a call now button at the bottom of your site. Forked from Call Now Button (http://callnowbutton.com)
Version: 0.0.2
Author: Aris Priyantoro
Author URI: http://aris.pituruh.com
License: GPL2
*/
?>
<?php
/*  Copyright 2013  Jerry Rietveld  (email : jerry@jgrietveld.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
define('CNB7_VERSION','0.0.2');
add_action('admin_menu', 'register_cnb_seven_page');
add_action('admin_init', 'cnb_seven_options_init');

function register_cnb_seven_page() {
	add_submenu_page('options-general.php', 'Call Now Button 7', 'Call Now Button 7', 'manage_options', 'call-now-button-seven', 'call_now_seven_settings_page');
}
set_basic_cnb_seven_options();


// add the color picker
add_action( 'admin_enqueue_scripts', 'cnb_seven_enqueue_color_picker' );
function cnb_seven_enqueue_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'cnb-script-handle', plugins_url('call-now-button.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

function cnb_seven_options_init() {
	register_setting('cnb_seven_options','cnb');
}
function call_now_seven_settings_page() { ?>
<div class="wrap"><h2>Call Now Button 7<span style="font-size:12px; font-variant: small-caps; font-family: Verdana, Geneva, sans-serif;">by <a class="pluginhelp" style=" text-decoration:none;" href="http://aris.pituruh.com" rel="help">Aris Priyantoro</a></span></h2>


<form method="post" action="options.php">
<?php settings_fields('cnb_seven_options'); ?>
<?php $options = cnb_seven_get_options(); ?>
			<h4 style="max-width:700px; text-align:right; margin:0;cursor:pointer; color:#21759b" class="cnb_seven_settings"><span class="plus">+</span><span class="minus">-</span> Advanced settings</h4>
            <table class="form-table">
            	<tr valign="top"><th scope="row">Call Now Button 7</th>
                	<td>
                    	<input name="cnb[active]" type="radio" value="1" <?php checked('1', $options['active']); ?> /> Enabled<br />
                        <input name="cnb[active]" type="radio" value="0" <?php checked('0', $options['active']); ?> /> Disabled
                    </td>
                </tr>
		<tr valign="top"><th scope="row">Phone number 1</th>
			<td><input type="text" name="cnb[number1]" value="<?php echo $options['number1']; ?>" />
			<br />
			Page <input type="text" name="cnb[show1]" value="<?php echo $options['show1']; ?>" />
					<p class="description">Enter IDs of the posts & pages the Call Now Button should appear on (leave blank for all).</p>
			Color <input name="cnb[color1]" type="text" value="<?php echo $options['color1']; ?>" class="cnb-color-field" data-default-color="#009900" />
			</td>
		</tr>
		<tr valign="top"><th scope="row">Phone number 2</th>
		<td><input type="text" name="cnb[number2]" value="<?php echo $options['number2']; ?>" />			<br />
			Page <input type="text" name="cnb[show2]" value="<?php echo $options['show2']; ?>" />
					<p class="description">Enter IDs of the posts & pages the Call Now Button should appear on (leave blank for all).</p>
			Color <input name="cnb[color2]" type="text" value="<?php echo $options['color2']; ?>" class="cnb-color-field" data-default-color="#009900" />
</td>
 </tr>
 <tr valign="top"><th scope="row">Phone number 3</th>
<td><input type="text" name="cnb[number3]" value="<?php echo $options['number3']; ?>" />			<br />
			Page <input type="text" name="cnb[show3]" value="<?php echo $options['show3']; ?>" />
					<p class="description">Enter IDs of the posts & pages the Call Now Button should appear on (leave blank for all).</p>
			Color <input name="cnb[color3]" type="text" value="<?php echo $options['color3']; ?>" class="cnb-color-field" data-default-color="#009900" />
</td>
</tr>
<tr valign="top"><th scope="row">Phone number 4</th>
 <td><input type="text" name="cnb[number4]" value="<?php echo $options['number4']; ?>" />			<br />
			Page <input type="text" name="cnb[show4]" value="<?php echo $options['show4']; ?>" />
					<p class="description">Enter IDs of the posts & pages the Call Now Button should appear on (leave blank for all).</p>
			Color <input name="cnb[color4]" type="text" value="<?php echo $options['color4']; ?>" class="cnb-color-field" data-default-color="#009900" />
</td>
 </tr>
 <tr valign="top"><th scope="row">Phone number 5</th>
  <td><input type="text" name="cnb[number5]" value="<?php echo $options['number5']; ?>" />			<br />
			Page <input type="text" name="cnb[show5]" value="<?php echo $options['show5']; ?>" />
					<p class="description">Enter IDs of the posts & pages the Call Now Button should appear on (leave blank for all).</p>
			Color <input name="cnb[color5]" type="text" value="<?php echo $options['color5']; ?>" class="cnb-color-field" data-default-color="#009900" />
</td>
 </tr>
 <tr valign="top"><th scope="row">Phone number 6</th>
<td><input type="text" name="cnb[number6]" value="<?php echo $options['number6']; ?>" />			<br />
			Page <input type="text" name="cnb[show6]" value="<?php echo $options['show6']; ?>" />
					<p class="description">Enter IDs of the posts & pages the Call Now Button should appear on (leave blank for all).</p>
			Color <input name="cnb[color6]" type="text" value="<?php echo $options['color6']; ?>" class="cnb-color-field" data-default-color="#009900" />
</td>
 </tr>
			</table>
            <div id="settings">
            	<table class="form-table">
				<tr valign="top"><th scope="row">Appearance</th>
                	<td>
                    	<label title="right">
                        	<input type="radio" name="cnb[appearance]" value="right" <?php checked('right', $options['appearance']); ?>>
                            <span>Right corner</span>
                        </label><br />
                    	<label title="left">
                        	<input type="radio" name="cnb[appearance]" value="left" <?php checked('left', $options['appearance']); ?>>
                            <span>Left corner</span>
                        </label><br />
                    	<label title="full">
                        	<input type="radio" name="cnb[appearance]" value="full" <?php checked('full', $options['appearance']); ?>>
                            <span>Full bottom</span>
                        </label>
                    </td>
                </tr>
 <tr valign="top"><th scope="row">Click tracking</th>
 <td><input type="radio" name="cnb[tracking]" value="2" <?php checked('2', $options['tracking']); ?> /> Google Universal Analytics (analytics.js)<br />
					    <input type="radio" name="cnb[tracking]" value="1" <?php checked('1', $options['tracking']); ?> /> Google Classic Analytics (ga.js)<br />
					    <input type="radio" name="cnb[tracking]" value="0" <?php checked('0', $options['tracking']); ?> /> Disabled
					<p class="description">Once click tracking has been set up and working on your site for a day, go to the Content section of the reports and view Event Tracking.</p></td>
 </tr>
 </table>
			</div><!--#settings-->
 <p class="submit">
 <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
 </p>
</form>
 </div>
<?php }
if(get_option('cnb') && !is_admin()) {
	
	// Color functions to calculate borders
	function changeColor($color, $direction) {
		if(!preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $color, $parts));
		if(!isset($direction) || $direction == "lighter") { $change = 45; } else { $change = -50; }
		for($i = 1; $i <= 3; $i++) {
		  $parts[$i] = hexdec($parts[$i]);
		  $parts[$i] = round($parts[$i] + $change);
		  if($parts[$i] > 255) { $parts[$i] = 255; } elseif($parts[$i] < 0) { $parts[$i] = 0; }
		  $parts[$i] = dechex($parts[$i]);
		} 
		$output = '#' . str_pad($parts[1],2,"0",STR_PAD_LEFT) . str_pad($parts[2],2,"0",STR_PAD_LEFT) . str_pad($parts[3],2,"0",STR_PAD_LEFT);
		return $output;
	}
	
	function getCurrentSettingOfPage($options) {
		$default = array('pages' => array(), 'number' => '', 'color' => '');
		
		for ($i=1;$i<=6;$i++) {
			if (strlen(trim($options['number'.$i])) > 0) {
				$default['number'] = $options['number'.$i];
				$default['color'] = $options['color'.$i];
				if ($options['show'.$i] != '') {
					$show= explode(',', str_replace(' ', '' ,$options['show'.$i]));
					$current_id = get_the_ID();
					if(in_array($current_id, $show)) {			
						$default['pages'] = $show;
						return $default;
					}
				}
				else {
					$default['pages'] = array('all');
					return $default;
				}
				
			}
		}
		return $default;
	}
	
	$options = get_option('cnb');
	if(isset($options['active'])) $enabled = $options['active']; else $enabled = 0;
	if($enabled == '1') {
		// it's enables so put footer stuff here
		function cnb_seven_head() {
			$options = get_option('cnb');
			$default_value = getCurrentSettingOfPage($options);
			
			$phone = explode(',', str_replace(' ', '' ,$default_value['number']));
			
			$credits = "\n<!-- Call Now Button 7".CNB7_VERSION." -->\n";
			if($options['appearance'] == 'full') {
				$ButtonAppearance = "width:100%;left:0;bottom:3px;";
				$ButtonAppearanceEnd ='';
				$ButtonExtra = "body {padding-bottom:60px;}";				
			} elseif($options['appearance'] == 'left') {
				$ButtonAppearance = "width:100px;left:0;border-bottom-right-radius:40px; border-top-right-radius:40px;bottom: 3px;";
				$ButtonAppearanceEnd  = 'background-position-x: 38px;';
				$ButtonExtra = "";				
			} else {
				$ButtonAppearance = "width:100px;right:0;border-bottom-left-radius:40px; border-top-left-radius:40px;bottom: 3px;";
				$ButtonAppearanceEnd = 'background-position-x: 5px;';
				$ButtonExtra = "";				
			}
			$show_css = false;
			if (strlen($default_value['number']) > 0 && is_array($default_value['pages'])) {
				$cssbase = ".callnowbuttonseven {display:none;} @media screen and (max-width:650px){.callnowbuttonseven {display:block; ".$ButtonAppearance." height:65px; position:fixed; border-top:2px solid ".changeColor($default_value['color'],'lighter')."; background:url(data:image/svg+xml;base64,".svg(changeColor($default_value['color'], 'darker') ).") center 2px no-repeat ".$default_value['color']."; text-decoration:none; box-shadow:0 0 5px #888; z-index:9999;background-size:58px 58px;".$ButtonAppearanceEnd." }".$ButtonExtra."}\n";
				if (sizeof($phone) == 2) {
					$cssaddition = "#callnow1 {bottom: 72px;}";
				}
				
				echo $credits."<style>".$cssbase."\n".$cssaddition."</style>\n";
			}
		}
		add_action('wp_head', 'cnb_seven_head');
		
		function cnb_seven_footer() {
			$alloptions = get_option('cnb');
			
			
			if(isset($alloptions['show']) && $alloptions['show'] != "") {
				$show = explode(',', str_replace(' ', '' ,$alloptions['show']));
				$limited = TRUE;
			} else {
				$limited = FALSE;
			}
			
			if($alloptions['tracking'] == '1') {
				$tracking = "onclick=\"_gaq.push(['_trackEvent', 'Contact', 'Call Now Button', 'Phone']);\""; 
			} elseif($alloptions['tracking'] == '2') {
				$tracking = "onclick=\"ga('send', 'event', 'Contact', 'Call Now Button', 'Phone');\""; 
			} else {
				$tracking = "";
			}
			
			$default_value = getCurrentSettingOfPage($alloptions);
			if ((strlen($default_value['number']) > 0 && in_array(get_the_ID(), $default_value['pages'])) || (in_array('all', $default_value['pages']))) {
				$phone = explode(',', str_replace(' ', '' ,$default_value['number']));
				
				echo '<a href="tel:'.$phone[0].'" id="callnow" class="callnowbuttonseven" '.$tracking.'>&nbsp;</a>';
				if (sizeof($phone) == 2) {
					echo '<a href="tel:'.$phone[1].'" id="callnow1" class="callnowbuttonseven" '.$tracking.'>&nbsp;</a>';
				}
			}
		}
		add_action('wp_footer', 'cnb_seven_footer');
	}
} 

function cnb_seven_get_options() { // Checking and setting the default options
	if(!get_option('cnb')) {
		$default_options = array(
							  'active' => 0,
							  'number1' => '',
							  'number2' => '',
							  'number3' => '',
							  'number4' => '',
							  'number5' => '',
							  'number6' => '',
							  'color1' => '#009900',
							  'color2' => '#009900',
							  'color3' => '#009900',
							  'color4' => '#009900',
							  'color5' => '#009900',
							  'color6' => '#009900',
							  'appearance' => 'right',
							  'tracking' => 0,
							  'show1' => '',
							  'show2' => '',
							  'show3' => '',
							  'show4' => '',
							  'show5' => '',
							  'show6' => ''
							  );
		add_option('cnb',$default_options);
		$options = get_option('cnb');
	} 
	
	$options = get_option('cnb');
	
	return $options;
}
function set_basic_cnb_seven_options() {
	if(get_option('cnb') && !array_key_exists('color', get_option('cnb'))) {
		$options = get_option('cnb');
		$default_options = array(
							  'active' => $options['active'],
							  'number1' => $options['number1'],
							  'number2' => $options['number2'],
							  'number3' => $options['number3'],
							  'number4' => $options['number4'],
							  'number5' => $options['number5'],
							  'number6' => $options['number6'],
							  'color1' => $options['color1'],
							  'color2' => $options['color2'],
							  'color3' => $options['color3'],
							  'color4' => $options['color4'],
							  'color5' => $options['color5'],
							  'color6' => $options['color6'],
							  'appearance' => $options['appearance'],
							  'tracking' => $options['tracking'],
							  'show1' => $options['show1'],
							  'show2' => $options['show2'],
							  'show3' => $options['show3'],
							  'show4' => $options['show4'],
							  'show5' => $options['show5'],
							  'show6' => $options['show6'],
							  );
		update_option('cnb',$default_options);
	}
}
function svg($color2) {
	$svg = '<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="38.000000pt" height="38.000000pt" viewBox="0 0 38.000000 38.000000"
 preserveAspectRatio="xMidYMid meet">
<metadata>
Created by potrace 1.10, written by Peter Selinger 2001-2011
</metadata>
<g transform="translate(0.000000,38.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M122 323 c-102 -50 -109 -203 -13 -269 42 -28 115 -33 161 -9 77 40
105 154 56 226 -44 64 -133 87 -204 52z m145 -23 c72 -43 85 -153 25 -212 -38
-39 -111 -49 -161 -24 -64 33 -90 121 -56 187 34 64 128 89 192 49z"/>
<path d="M117 264 c-26 -27 12 -111 65 -144 42 -26 93 -23 93 5 0 17 -7 20
-44 20 -52 1 -76 27 -76 84 0 34 -20 53 -38 35z"/>
</g>
</svg>';
	return base64_encode($svg);
} ?>

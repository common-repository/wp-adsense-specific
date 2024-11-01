<?php

/*
Plugin Name: WP AdSense Specific
Version: v1.1
Plugin URI: http://www.cornishsurfer.co.uk/20/wordpress-plugins/wp-adsense-specific
Author: Cornish Surfer
Author URI: http://www.cornishsurfer.co.uk
Plugin Description: Increase your website revenue using this simple AdSense Management tool
*/

/*
    This program is free software; you can redistribute it
    under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

$wp_ad_specific_insert_version = 1.1;
function show_ad_lib_1()
{
    $ad_lib_encoded_value_1 = get_option('wp_ad_lib_1_code');
    $ad_lib_decoded_value_1 = html_entity_decode($ad_lib_encoded_value_1, ENT_COMPAT);
    if(!empty($ad_lib_decoded_value_1))
    {
        $output .= " $ad_lib_decoded_value_1";
    }
    return $output;
}
function show_ad_lib_2()
{
    $ad_lib_encoded_value_2 = get_option('wp_ad_lib_2_code');
    $ad_lib_decoded_value_2 = html_entity_decode($ad_lib_encoded_value_2, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_2))
    {
        $output .= " $ad_lib_decoded_value_2";
    }
    return $output;
}
function show_ad_lib_3()
{
    $ad_lib_encoded_value_3 = get_option('wp_ad_lib_3_code');
    $ad_lib_decoded_value_3 = html_entity_decode($ad_lib_encoded_value_3, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_3))
    {
        $output .= " $ad_lib_decoded_value_3";
    }
    return $output;
}
function show_ad_lib_4()
{
    $ad_lib_encoded_value_4 = get_option('wp_ad_lib_4_code');
    $ad_lib_decoded_value_4 = html_entity_decode($ad_lib_encoded_value_4, ENT_COMPAT);
    if(!empty($ad_lib_decoded_value_4))
    {
        $output .= " $ad_lib_decoded_value_4";
    }
    return $output;
}
function show_ad_lib_5()
{
    $ad_lib_encoded_value_5 = get_option('wp_ad_lib_5_code');
    $ad_lib_decoded_value_5 = html_entity_decode($ad_lib_encoded_value_5, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_5))
    {
        $output .= " $ad_lib_decoded_value_5";
    }
    return $output;
}
function show_ad_lib_6()
{
    $ad_lib_encoded_value_6 = get_option('wp_ad_lib_6_code');
    $ad_lib_decoded_value_6 = html_entity_decode($ad_lib_encoded_value_6, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_6))
    {
        $output .= " $ad_lib_decoded_value_6";
    }
    return $output;
}	
function show_ad_lib_7()
{
    $ad_lib_encoded_value_7 = get_option('wp_ad_lib_7_code');
    $ad_lib_decoded_value_7 = html_entity_decode($ad_lib_encoded_value_7, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_7))
    {
        $output .= " $ad_lib_decoded_value_7";
    }
    return $output;
}
function show_ad_lib_8()
{
    $ad_lib_encoded_value_8 = get_option('wp_ad_lib_8_code');
    $ad_lib_decoded_value_8 = html_entity_decode($ad_lib_encoded_value_8, ENT_COMPAT);
    if(!empty($ad_lib_decoded_value_8))
    {
        $output .= " $ad_lib_decoded_value_8";
    }
    return $output;
}
function show_ad_lib_9()
{
    $ad_lib_encoded_value_9 = get_option('wp_ad_lib_9_code');
    $ad_lib_decoded_value_9 = html_entity_decode($ad_lib_encoded_value_9, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_9))
    {
        $output .= " $ad_lib_decoded_value_9";
    }
    return $output;
}
function show_ad_lib_10()
{
    $ad_lib_encoded_value_10 = get_option('wp_ad_lib_10_code');
    $ad_lib_decoded_value_10 = html_entity_decode($ad_lib_encoded_value_10, ENT_COMPAT);

    if(!empty($ad_lib_decoded_value_10))
    {
        $output .= " $ad_lib_decoded_value_10";
    }
    return $output;	
}
function wp_ad_lib_process($content)
{
    if (strpos($content, "<!-- wp_ad_lib_1 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_1 -->', show_ad_lib_1(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_2 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_2 -->', show_ad_lib_2(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_3 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_3 -->', show_ad_lib_3(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_4 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_4 -->', show_ad_lib_4(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_5 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_5 -->', show_ad_lib_5(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_6 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_6 -->', show_ad_lib_6(), $content);
    }	
    if (strpos($content, "<!-- wp_ad_lib_7 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_7 -->', show_ad_lib_7(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_8 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_8 -->', show_ad_lib_8(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_9 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_9 -->', show_ad_lib_9(), $content);
    }
    if (strpos($content, "<!-- wp_ad_lib_10 -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- wp_ad_lib_10 -->', show_ad_lib_10(), $content);
    }	
    return $content;	
}

// Displays Adsense Specific Campaign Options menu

function ad_lib_add_option_page() {
    if (function_exists('add_options_page')) {
        add_options_page('WP Adsense Specific', 'WP Adsense Specific', 8, __FILE__, 'ad_specific_options_page');
    }
}

function ad_specific_options_page() {
    global $wp_ad_specific_insert_version;
    if (isset($_POST['info_update']))
    {
        echo '<div id="message" class="updated fade"><p><strong>';
        $tmpCode1 = htmlentities(stripslashes($_POST['wp_ad_lib_1_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_1_code', $tmpCode1);
		
        $tmpCode2 = htmlentities(stripslashes($_POST['wp_ad_lib_2_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_2_code', $tmpCode2);
       
		$tmpCode3 = htmlentities(stripslashes($_POST['wp_ad_lib_3_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_3_code', $tmpCode3);
        
		$tmpCode4 = htmlentities(stripslashes($_POST['wp_ad_lib_4_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_4_code', $tmpCode4);
        
		$tmpCode5 = htmlentities(stripslashes($_POST['wp_ad_lib_5_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_5_code', $tmpCode5);
        
		$tmpCode6 = htmlentities(stripslashes($_POST['wp_ad_lib_6_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_6_code', $tmpCode6);
        
		$tmpCode7 = htmlentities(stripslashes($_POST['wp_ad_lib_7_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_7_code', $tmpCode7);
        
		$tmpCode8 = htmlentities(stripslashes($_POST['wp_ad_lib_8_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_8_code', $tmpCode8);
        
		$tmpCode9 = htmlentities(stripslashes($_POST['wp_ad_lib_9_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_9_code', $tmpCode9);
        
		$tmpCode10 = htmlentities(stripslashes($_POST['wp_ad_lib_10_code']) , ENT_COMPAT);
        update_option('wp_ad_lib_10_code', $tmpCode10);	
		
        echo 'Options Updated!';
        echo '</strong></p></div>';
    }
    ?>
    <div class=wrap>
<h2>Adsense Specific: Configuration v<?php echo $wp_ad_specific_insert_version; ?></h2>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EJA23CLP3B5JS" target="blank"><img src="../wp-content/plugins/wp-adsense-specific/donate.jpg"></img></a>
		<a href="http://twitter.com/cornish_surfer" target="blank"><img src="../wp-content/plugins/wp-adsense-specific/twitter.jpg" alt="Follow Me on Twitter"></a>
		<a href="http://www.amazon.co.uk/gp/redirect.html?ie=UTF8&location=http%3A%2F%2Fwww.amazon.co.uk%2F&tag=wp_plugin-21&linkCode=ur2&camp=1634&creative=19450" target="blank"><img src="../wp-content/plugins/wp-adsense-specific/amazon.jpg"></a>
    <p>For information and updates, please visit:<br />
    <a href="http://www.cornishsurfer.co.uk" target="blank">http://www.cornishsurfer.co.uk</a></p>
    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
    <input type="hidden" name="info_update" id="info_update" value="true" />
    <fieldset class="options">
	<legend><strong>Dontation</strong></legend>
	<p>If you like this plugin and find it useful, help keep this plugin free and actively developed by clicking the <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EJA23CLP3B5JS" target="blank">donate</a> button above to support my work; even if it is just &pound;1. <br />Also, don't forget to follow me on <a href="http://twitter.com/cornish_surfer" target="blank">Twitter</a>.<br /><br /><i>Thank you</i> :)</p>
	<br />
	<legend><strong>Usage</strong></legend>
    <p>Use this Wordpress plugin to quickly target specific sections of your blog or website by easily adding Google AdSense channels to your posts, pages and sidebar.</p>
    <p>Two main ways you can use this tool; add trigger text or call the functions from a template file (shown below)</p>
    <ol>
    <li>Add trigger text <strong>&lt;!-- wp_ad_lib_# --&gt;</strong> to your posts or pages. You only need to copy the trigger text code and replace &#39;#&#39; with the <b>Target Specific</b> number depending on the Adsense channel you are using e.g. <strong>&lt;!-- wp_ad_lib_1 --&gt;</strong></li>
    <li>Call the function from a template: <strong>&lt;?php echo show_ad_lib_#(); ?&gt;</strong><br /></li>
    </ol>
	<br />
	<legend><strong>Example</strong></legend>
	<p>If you had a movie section on your website, you could place the trigger text - <strong>&lt;!-- wp_ad_lib_2 --&gt;</strong> where you want the Ad to appear (in a post or page) and then when you add the AdSense specific code into the <b>&quot;Adsense Code | Target Specific 2&quot;</b> box on the right. If you had the latest movie release in this channel such as <a href="http://www.amazon.co.uk/gp/redirect.html?ie=UTF8&location=http%3A%2F%2Fwww.amazon.co.uk%2F&tag=wp_plugin-21&linkCode=ur2&camp=1634&creative=19450" target="blank">Avatar</a> then all movies sections on your site would display <b>Avatar</b> related Ads. This overall approach throughout your site can help increase click through and produce higher revenue from existing pages.</p>
    </fieldset>
	<br/>
    <fieldset class="options">
    <legend><strong>Options</strong></legend>
	<br />
    <table width="100%" border="0" cellspacing="0" cellpadding="6">
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 1</strong><br />&lt;!-- wp_ad_lib_1 --&gt;<br />or<br />&lt;?php echo show_ad_lib_1(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_1_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_1_code'); ?></textarea>
    </td></tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 2</strong><br />&lt;!-- wp_ad_lib_2 --&gt;<br />or<br />&lt;?php echo show_ad_lib_2(); ?&gt;
    </td><td align="left">	
    <textarea name="wp_ad_lib_2_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_2_code'); ?></textarea>
    </td>
    </tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 3</strong><br />&lt;!-- wp_ad_lib_3 --&gt;<br />or<br />&lt;?php echo show_ad_lib_3(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_3_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_3_code'); ?></textarea>
    </td>
	</tr>
	<tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 4</strong><br />&lt;!-- wp_ad_lib_4 --&gt;<br />or<br />&lt;?php echo show_ad_lib_4(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_4_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_4_code'); ?></textarea>
    </td></tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 5</strong><br />&lt;!-- wp_ad_lib_5 --&gt;<br />or<br />&lt;?php echo show_ad_lib_5(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_5_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_5_code'); ?></textarea>
    </td>
    </tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 6</strong><br />&lt;!-- wp_ad_lib_6 --&gt;<br />or<br />&lt;?php echo show_ad_lib_6(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_6_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_6_code'); ?></textarea>
    </td>
	</tr>	
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 7</strong><br />&lt;!-- wp_ad_lib_7 --&gt;<br />or<br />&lt;?php echo show_ad_lib_7(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_7_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_7_code'); ?></textarea>
    </td>
	</tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 8</strong><br />&lt;!-- wp_ad_lib_8 --&gt;<br />or<br />&lt;?php echo show_ad_lib_8(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_8_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_8_code'); ?></textarea>
    </td>
	</tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 9</strong><br />&lt;!-- wp_ad_lib_9 --&gt;<br />or<br />&lt;?php echo show_ad_lib_9(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_9_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_9_code'); ?></textarea>
    </td>
	</tr>
    <tr valign="top"><td width="35%" align="left">
    <strong>Adsense Code | Target Specific 10</strong><br />&lt;!-- wp_ad_lib_10 --&gt;<br />or<br />&lt;?php echo show_ad_lib_10(); ?&gt;
    </td><td align="left">
    <textarea name="wp_ad_lib_10_code" rows="6" cols="35"><?php echo get_option('wp_ad_lib_10_code'); ?></textarea>
    </td>
	</tr>	
    </table>
    </fieldset>

    <div class="submit">
        <input type="submit" name="info_update" value="<?php _e('Update options'); ?> &raquo;" />
    </div>
    </form>
    </div>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EJA23CLP3B5JS" target="blank"><img src="../wp-content/plugins/wp-adsense-specific/donate.jpg"></img></a>
		<a href="http://www.twitter.com/cornish_surfer" target="blank"><img src="../wp-content/plugins/wp-adsense-specific/twitter.jpg" alt="Follow Me on Twitter"></a>
		<a href="http://www.amazon.co.uk/gp/redirect.html?ie=UTF8&location=http%3A%2F%2Fwww.amazon.co.uk%2F&tag=wp_plugin-21&linkCode=ur2&camp=1634&creative=19450" target="blank"><img src="../wp-content/plugins/wp-adsense-specific/amazon.jpg"></a>	
<a href="http://www.1and1.co.uk/?k_id=5994467" target="blank">1and1 Web Hosting</a> | 
<a href="http://www.mediatemple.net/go/order/?refdom=cornishsurfer.co.uk" target="blank">Media Temple Hosting</a>


<?php
}
add_filter('the_content', 'wp_ad_lib_process');

// Insert the ad_lib_add_option_page in the 'admin_menu'
add_action('admin_menu', 'ad_lib_add_option_page');

?>
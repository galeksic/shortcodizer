<?php
/*
Plugin Name: Shortcodizer
Plugin URI: https://productforums.google.com/d/topic/adsense/v5f_HHzjBXA/discussion
Description: Insert AdSense ad code with Wordpress shorcodes [adsense-ad-code ad="1"] [adsense-ad-code ad="2"] [adsense-ad-code ad="3"], etc.
Version: 0.01 BETA
Author: Goran Aleksic
Author URI: http://www.88em.com
*/

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

http://www.reallyeffective.co.uk/archives/2009/06/22/how-to-code-your-own-wordpress-shortcode-plugin-tutorial-part-1/
http://wp.smashingmagazine.com/2012/05/01/wordpress-shortcodes-complete-guide/
*/

add_shortcode("adsense-ad-code", "adsense_ad_code_handler");

function adsense_ad_code_handler($atts) {

  extract(shortcode_atts(array(
    'ad' => 1,
  ), $atts));

  $adArray[1] = 'INSERT AD CODE HERE';

/*
  $adArray[2] = '';
  $adArray[3] = '';
  $adArray[4] = '';
  $adArray[5] = '';
  // etc.
*/

  return $adArray[$ad];
}

?>

<?php
/**
 * Plugin Name: WooCommerce Subscriptions - Autocheck to Change All Addresses
 * Plugin URI: https://github.com/jrick1229/wcs-autocheck-all-addresses
 * Description: Autochecks the 'Update address for all subscriptions' checkbox when changing an address on the My Account page.
 * Author: jrick1229
 * Author URI: http://joeyrr.com/
 * Version: 1.0
 * License: GPLv3
 *
 * GitHub Plugin URI: jrick1229/wcs-autocheck-all-addresses
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		WooCommerce Susbcriptions
 * @author		Prospress Inc.
 * @since		1.0
 */

/**
 * Equeue the custom select radio script.
 */

 function wcs_autocheck_all_addresses() {
   if (is_account_page()) {
     wp_enqueue_script( 'wcs-autocheck-all-addresses', plugin_dir_url( __FILE__ ) . 'wcs-autocheck-all-addresses.js', array( 'jquery' ), '1.0.0', true  );
   }
 }
 add_action( 'wp_enqueue_scripts', 'wcs_autocheck_all_addresses' );
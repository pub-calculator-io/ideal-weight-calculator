<?php
/*
Plugin Name: Ideal Weight Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/ideal-weight-calculator/
Description: Based on many famous equations, this free ideal weight calculator determines an optimal healthy body weight based on age, gender, and height.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_ideal_weight_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Ideal Weight Calculator by Calculator.iO";

function display_ci_ideal_weight_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Ideal Weight Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_ideal_weight_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_ideal_weight_calculator', 'display_ci_ideal_weight_calculator' );
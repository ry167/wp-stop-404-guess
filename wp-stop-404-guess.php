<?php
/**
 * Plugin Name: WP - Stop 404 Guessing
 * Description: Prevent WordPress from guessing URLs that don't exist and 404 instead.
 * Version: 1.0
 * Author: <a href="mailto:ryan@viennaandbailey.co.nz">Ryan Halliday</a>
 * Plugin URI: https://viennaandbailey.co.nz/
 */

add_filter('do_redirect_guess_404_permalink', '__return_false');

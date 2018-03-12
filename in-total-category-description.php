<?php
/*
Plugin Name: Изменение вывода описания категорий товаров в теме Total
Plugin URI: http://in-soft.pro/pligins/in-total-category-description/
Description: Этот плагин меняет хуки WooCommerce чтобы в теме Total описание категории выводилось под товарами
Version: 1.0
Author: Иван Никитин и партнеры
Author URI: https://ivannikitin.com
Сокращенное название или префикс: intcd_
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'init', 'intcd_init');
function intcd_init()
{
	remove_action( 'wpex_hook_content_top', 'wpex_term_description' );
	add_action( 'wpex_hook_content_bottom', 'wpex_term_description' );
}

<?php if( ! defined( "BASE_PATH" ) ){ echo 'Not allow to execute directly.'; exit(); }

if( ! function_exists('t') && defined('LOCALE') ){
	require_once 'locale/' . LOCALE . '.php';
	/**
	 * Translation
	 * if not found word, return label.
	 */
	function t( $label ){
		global $w2_word_set;
		return empty( $w2_word_set[$label] ) ? $label : htmlspecialchars($w2_word_set[$label], ENT_QUOTES);
	}
}

if( ! function_exists('t_e') && defined('LOCALE') ){
	require_once 'locale/' . LOCALE . '.php';
	/**
	 * Translation Exists
	 */
	function t_e( $label ){
		global $w2_word_set;
		return empty( $w2_word_set[$label] ) ? FALSE : TRUE;
	}
}
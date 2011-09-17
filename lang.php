<?php if( ! defined( "BASE_PATH" ) ){ echo 'Not allow to execute directly.'; exit(); }

if( ! function_exists('t') && defined('LANG') ){
	require_once 'lang/' . LANG . '.php';
	/**
	 * Translation
	 * if not found word, return label.
	 */
	function t( $label ){
		global $w2_word_set;
		return empty( $w2_word_set[$label] ) ? $label : $w2_word_set[$label];
	}
}

if( ! function_exists('t_e') && defined('LANG') ){
	require_once 'lang/' . LANG . '.php';
	/**
	 * Translation Exists
	 */
	function t_e( $label ){
		global $w2_word_set;
		return empty( $w2_word_set[$label] ) ? FALSE : TRUE;
	}
}
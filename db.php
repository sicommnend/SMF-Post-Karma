<?php
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');

elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

global $db_prefix, $smcFunc;

// First load the SMF 2's Extra DB Functions
db_extend('packages');
	db_extend('extra');

	$smcFunc['db_add_column']('{db_prefix}messages',
		array(
			'name' => 'karma_bad',
			'type' => 'smallint',
			'size' => 8,
			'null' => false
		)
	);
	$smcFunc['db_add_column']('{db_prefix}messages',
		array(
			'name' => 'karma_good',
			'type' => 'smallint',
			'size' => 5,
			'null' => false
		)
	);
?>
<?php

$GLOBALS['TL_DCA']['tl_member']['palettes']['__selector__'][] = 'addMOL';
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] .= ';{mol_legend:hide},addMOL';
$GLOBALS['TL_DCA']['tl_member']['subpalettes']['addMOL'] = 'max_once_login';

$GLOBALS['TL_DCA']['tl_member']['fields']['addMOL'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['addMOL'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['max_once_login'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['max_once_login'],
	'default'                 => 1,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'digit'),
	'sql'                     => "int(10) unsigned NOT NULL default '1'"
);
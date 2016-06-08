<?php

$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'addMOL';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{mol_legend:hide},addMOL';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['addMOL'] = 'max_once_login';

$GLOBALS['TL_DCA']['tl_settings']['fields']['addMOL'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['addMOL'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['max_once_login'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['max_once_login'],
	'default'                 => '1',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'digit')
);
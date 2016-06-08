<?php

$GLOBALS['TL_HOOKS']['postLogin'][] = array('LoginControll', 'checkDeclaredMember');

define('__LOGINCONTROLL_VERSION__', '1.0.0');
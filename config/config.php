<?php

$GLOBALS['TL_HOOKS']['postLogin'][] = array('LoginControll', 'checkDeclaredMember');
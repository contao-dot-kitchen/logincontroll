<?php

namespace Contao;

class LoginControll extends \Controller
{
	public function checkDeclaredMember($member)
	{
		if($member->addMOL OR \Config::Get('addMOL')) {
			$this->Import('Database');
			$objCount = $this->Database->prepare("SELECT * FROM tl_session WHERE pid=? && name=?")->execute($member->id, 'FE_USER_AUTH');

			if($member->addMOL && ($objCount->count() > $member->max_once_login)) {
				$this->Database->prepare("DELETE FROM tl_session WHERE pid=? && name=? && sessionID=?")->execute($member->id, 'FE_USER_AUTH', session_id());
			}
			elseif(\Config::Get('addMOL') && ($objCount->count() > \Config::Get('max_once_login'))) {
				$this->Database->prepare("DELETE FROM tl_session WHERE pid=? && name=? && sessionID=?")->execute($member->id, 'FE_USER_AUTH', session_id());
			}
		}
	}
}
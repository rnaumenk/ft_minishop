<?php

function auth($login, $passwd) {
	if ($login && $passwd && file_exists('./private/passwd.csv')) {
		$acc = unserialize(file_get_contents('./private/passwd.csv'));
		$found = 0;
		foreach ($acc as $ac => $value) {
			if ($value['login'] === $login) {
				$found = 1;
				$temp = $ac;
				break ;
			}
		}
		if ($found === 0 || $acc[$temp]['passwd'] !== hash('whirlpool', $passwd))
			return FALSE;
		else
			return TRUE;
	}
	return FALSE;
}

?>

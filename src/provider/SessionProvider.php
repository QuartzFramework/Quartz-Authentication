<?php

namespace quartz\authentication\provider;

class SessionProvider {

	private $active = false;

	public function __construct(){

	}

	public function isActive(){
		return $this->active;
	}

	public function setActive($bool = true) {
		$this->active = $bool;
	}


	public function getSession(){
		if (isset($_SESSION) && $_SESSION != '') {
			return $_SESSION;
		}
		return [];
	}

	public function authSession(){
		$session = $this->preg_grep_keys('/^quartz_authentication(\d+)/',$this->getSession());
		if (isset($session) && !empty($session)) {
			return array_values($session)[0];
		}
		return [];
	}

	private function preg_grep_keys($pattern, $input, $flags = 0) {
		return array_intersect_key($input, array_flip(preg_grep($pattern, array_keys($input), $flags)));
	}

}
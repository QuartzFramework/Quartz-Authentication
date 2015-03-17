<?php

/**

Quartz authentication provider, provides basic authenication functions which can be extended.

**/

namespace quartz\authentication;



class AuthenticationProvider {
	private $salt;

	public function __construct(){
		$this->salt = 'salty_';
	}

	public function getSalt(){
		return $this->salt;
	}

	public function setSalt($salt){
		$this->salt = $salt;
		return $this;
	}

	public function hash($input){
		return hash('sha512', $this->getSalt().$input);
	}

}

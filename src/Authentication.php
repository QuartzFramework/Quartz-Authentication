<?php
/**
	Default authenticaton wrapper, this wrapper will be used to call all provider child functions
**/

namespace quartz;

class Authentication{



	protected $authType;

	/**
		Initializea new authentication instance, setup a listener
		This function requires an authentication provider
		@param authentication type
	**/
	public function __construct(AuthenticationProvider $authenticationProvider){
		$this->authType = $authenticationProvider;
	}

	public function hash($input){
		return $this->authType->hash($input);
	}


	public function validate($input){
		return $this->authType->validate($input);
	}

}

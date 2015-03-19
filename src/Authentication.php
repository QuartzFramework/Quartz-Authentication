<?php
/**
	Default authenticaton wrapper, this wrapper will be used to call all provider child functions
**/

namespace quartz\authentication;



class Authentication{



	protected $auth;

	/**
		Initializea new authentication instance, setup a listener
		This function requires an authentication provider
		@param authentication type
	**/
	public function __construct(AuthenticationProvider $authenticationProvider){
		$this->auth= $authenticationProvider;
		$this->sessions = new provider\SessionProvider;;
	}

	public function provider() {
		return $this->auth;
	}

	public function test(){
		echo $this->sessions->authSession();
	}


}

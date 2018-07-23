<?php

namespace App\Repositories;

use App\SecretCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecretCodeRepository 
{

    protected $code;

	public function __construct(SecretCode $code)
	{
		$this->code =  $code;
	}


	public function store(Array $inputs)
	{
		
		$lot = $inputs['lot'];
		$this->generateActivationCode($lot);
		
		return $lot;
	}
	public function generateActivationCode($lot)
	{

		for ($i=0; $i < $lot; $i++) { 

			$the_code = new SecretCode ;
			$uicode= uniqid('',true);
			$hashcode = Hash::make($uicode);

			$the_code->uicode = $uicode;
			$the_code->hashcode =$hashcode;
			$the_code->sup_admin_id =  Auth::id();
			$the_code->save();
			
		}
		
	}

}
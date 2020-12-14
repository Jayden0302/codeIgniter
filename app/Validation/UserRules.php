<?php 
namespace App\Validation;
use App\Models\UserModel;

class UserRules{
	public function validateUser(string $username, string $password){
		$model = new UserModel();
		$user = $model->where('username',$data['username'])
					  ->first();

		if(!$user){
			return false;
		}

		return password_verify($data['password'],$user['password']);			  
	}
}
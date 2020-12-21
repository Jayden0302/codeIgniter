<?php 
namespace App\Validation;
use App\Models\UserModel;

class UserRules{
	public function validateUser(string $username, string $password, array $data){
		$model = new UserModel();
		$user = $model->where('username',$data['username'])
					  ->first();

		if(!$user){
			return false;
		}
		#return true;
		return password_verify($data['password'],$user['password']);			  
	}
}
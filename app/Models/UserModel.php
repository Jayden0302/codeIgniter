<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	protected $table = 'user';
	protected $allowedFields =['username','password','status'];

	public function getUser(){
		return $this->asArray()
					->first();
	}
} 
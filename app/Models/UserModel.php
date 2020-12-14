<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model{
	protected $table = 'user';
	protected $allowedFields =['username','password','status'];

	public function getPosts($slug = null){
		if(!$slug){
			return $this->findAll();
		}

		return $this->asArray()
					->where(['slug' => $slug])
					->first();
	}
} 
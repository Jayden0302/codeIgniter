<?php namespace App\Controllers;
use App\Models\UserModel;
class Login extends BaseController{

	public function index(){

		$data =[];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			$rules = [
				'username' => 'required|min_length[2]|max_length[50]',
				'password' => 'required|min_length[2]|max_length[255]|validateUser[username,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Username or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();
				$user = $model->where('username', $this->request->getVar('username'))
											->first();
				$this->setUserSession($user);
				return redirect()->to('/blog/create');

			}
		}

		echo view('templates/header',$data);
		echo view('adminpanel/loginview');
		echo view('templates/footer');
	}

	public function register(){

		$data =[];
		helper(['form']);
		echo view('adminpanel/header',$data);
		echo view('adminpanel/register');
		echo view('adminpanel/footer');
	}
}
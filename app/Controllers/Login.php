<?php namespace App\Controllers;

class Login extends BaseController{

	public function index(){

		$data =[];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			$rules = [
				'username' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
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
				return redirect()->to('dashboard');

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
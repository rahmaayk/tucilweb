<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		if ($this->request->getMethod() == 'post') {

			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				return view('auth/index');
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		return view('auth/login');
	}


	public function register(){
		if ($this->request->getMethod() == 'post') {

			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				return view('auth/index');
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		return view('auth/register');
	}

	public function index(){
		$data['title'] = "Halaman Depan";

		echo view('index/i_header', $data);
		echo view('index/i_content', $data);
		
	}

	public function about(){
		return view('auth/about');
	}

	public function lightband(){
		$data['title'] = "Halaman Depan";

		echo view('lightband/l_header', $data);
		echo view('lightband/l_content', $data);
	}

	public function album(){
		$data['title'] = "Halaman Depan";

		echo view('album/a_header', $data);
		echo view('album/a_content', $data);
	}

	public function merch (){
		$data['title'] = "Halaman Depan";

		echo view('merch/m_header', $data);
		echo view('merch/m_content', $data);
	}

	//--------------------------------------------------------------------

}

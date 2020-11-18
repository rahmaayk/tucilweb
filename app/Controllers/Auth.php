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
		return view('auth/index');
	}

	public function about(){
		return view('auth/about');
	}

	public function lightband(){
		return view('auth/lightband');
	}

	public function album(){
		return view('auth/album');
	}

	public function merch (){
		return view('auth/merch');
	}

	//--------------------------------------------------------------------

}

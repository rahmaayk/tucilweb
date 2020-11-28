<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index(){
	$data['title'] = "Halaman Depan";

		echo view('admin/adm_header', $data);
		echo view('admin/adm_content', $data);
		echo view('admin/adm_sidebar', $data);
		echo view('admin/adm_footer', $data);
	}

	//--------------------------------------------------------------------

}
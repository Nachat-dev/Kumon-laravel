<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controllers\BaseController;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;




class Login extends Controller
{
	/**
	 * @var HTTP\IncomingRequest
	 */
	protected $request;


	public function test(){
		//$model = new UserModel();
		$users = DB::select('select * from studentdata where user');
		return $users;

	}

	public function index()
	{
		//helper(['form']);
		echo view('login');
	}

	public function auth(Request $request)
	{
		$user = $request->input('user');
		$password = $request->input('password');
		$session = session();
		$model = new UserModel();
		//$data  = $model::Where('user', $request->identity)->first();
		$data = $model->where('user',$this->request->$user)->first();
		//print_r($result);
		if($data){
			//echo "yes";
			if($data['password'] == $this->request->$password){
				$sesion_data = [
					'centreTH'=>$data['centreTH'],
					'centreEN'=>$data['centreEN'],
					'stdID'=>$data['stdID'],
					'stdNameTH'=>$data['stdNameTH'],
					'phone'=>$data['phone'],
					'stdNameEN'=>$data['stdNameEN'],
					'surnameTH'=>$data['surnameTH'],
					'surnameEN'=>$data['surnameEN'],
					'id' => $data['id'],
					'user' => $data['user'],
					'logged_in' => TRUE
				];
				$session->set($sesion_data);
				echo view('popup',$sesion_data);
				//print_r($sesion_data);
				
				//return redirect()->to('/profile');
				//echo "Welcome, ".$result['stdNameEN'] ;
			}else{
			$session->setFlashdata('msg', "Wrong Password");
				return redirect()->to('/login');
			}
		}else {
			//echo "no";
			$session->setFlashdata('msg', "User not found");
			return redirect()->to('/login');
		}
	/*
		$session = session();
		$model = new UserModel();
		$users = $this->request->getVar('user');
		$password = $this->request->getVar('password');
		$data = $model->where('user', $users)->first();

		if ($data) {
			$pass = $data['password'];
			$verify_password = password_verify($password, $pass);
			if ($verify_password) {
				$sesion_data = [
					'id' => $data['id'],
					'user' => $data['user'],
					'logged_in' => TRUE
				];
				$session->set($sesion_data);
				return redirect()->to('/profile');
			} else {
				$session->setFlashdata('msg', "Wrong Password");
				return redirect()->to('/login');
			}
		} else {
			$session->setFlashdata('msg', "User not found");
			return redirect()->to('/login');
		}*/
	}

	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/login');
	}
}

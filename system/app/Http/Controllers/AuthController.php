<?php
namespace App\Http\Controllers;


use App\Models\Mitra;
use App\Http\Controllers\Controller;
/**
*
*/
class AuthController extends Controller
{
	public function Login(){

		return view ('login');

	}

	public function LoginProses(){
		if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {

			return redirect('page404');
		}

        if (auth()->guard('mitra')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('mitra-page');
        }

		return redirect('login');
	}

	public function Logout(){
		auth()->logout();
		auth()->guard('mitra')->logout();
		return redirect('/');
	}
}

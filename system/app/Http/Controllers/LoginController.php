<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Str;
use Auth;
use App\Models\User;
use App\Models\member;
/**
*
*/
class LoginController extends Controller
{

	public function login(){
		return view ('login');

	}

	public function loginproses(Request $req){

		$this->validate(request(), [
			'username' => 'required',
			'password' => 'required',		

		]);

		if(Auth::attempt (['username' => $req->username, 'password' => $req->password], false)){
			if(Auth::User()->level == 1){
				return redirect ('page404')->with('success', ' Selamat Anda Berhasil Login');

			}else if(Auth::User()->level == 2){
				return redirect ('prodi')->with('success', ' Selamat Anda Berhasil Login');
				
			}else if(Auth::User()->level == 3){
				return redirect ('mitra-page')->with('success', ' Selamat Anda Berhasil Login');
				
			}
			return redirect('login');
			
		}else{

		return redirect ('login')->with('login_error','Username Atau Password Anda Salah!');
		}
			
	}

    public function logout(){
		Auth::logout();
		return redirect('/');
	}




	// function test(){
	// 	$user= new user;
	// 	$user->nama= 'Super Admin';
	// 	$user->username= 'teknikinformatika2021';
	// 	$user->password=bcrypt('teknikinformatika2021');
	// 	$user->level = 1;
	// 	$user->save();

	// 	return "Berhasil";


	// }
}


<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //Testing COmmt
    public function index(){
        return view('auth.login');

    }
    public function verify(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('user')->attempt(['email' => $request->email,'password'=>$request->password])){
            return redirect()->intended('/admin');
        }else{
            return redirect(route('auth.index'))->with('pesan','Kombinasi email dan password salah');
        }
    }

    public function logout(){
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect(route('auth.index'));
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('content.auth.login');
    }

    public function verify(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        #kondisi dimana data tidak ada yang kosong
        $pesanError = 'Kombinasi Email dan Password Tidak ditemukan';
        $user = User::query()->where('email', $request->email)->first();
        if ($user !== null) {
            if (password_verify($request->password, $user->password)) {
                #kondisi dimana passwordnya terverifikasi
                Auth::login($user);
                $request->session()->regenerate();
                return redirect('/teacher');
            }
        }
        return redirect()->back()->with('gagal', $pesanError);
>>>>>>> 34aca4c04279cf1cb0308240c7e2a79c6ea6a443
    }
}

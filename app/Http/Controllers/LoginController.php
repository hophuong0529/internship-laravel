<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request){
        $messages = [
            'username.required' => 'Tên đăng nhập không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu tối thiểu 6 kí tự',
        ];

        Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:6',
        ], $messages)->validate();

        $account = Account::where('username', $request->username)->first();
        if ($account && Hash::check($request->password, $account->password)) {
            session([
                'username' => $account->username,
                    'name' => $account->name
            ]);
            echo "<script>alert('Đăng nhập thành công !'); location='.'</script>";
        } else {
            $alert = 'Sai tên đăng nhập hoặc mật khẩu';
            return redirect()->back()->with('alert',$alert);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $username = $request->username;
        $result = Account::where('username', $username)->first();

        $messages = [
            'username.required' => 'Tên đăng nhập không được để trống',
            'name.required' => 'Vui lòng nhập tên của bạn',
            'mobile.required' => 'Số điện thoại không được để trống',
            'mobile.min' => 'Số điện thoại không đúng. Vui lòng nhập lại',
            'address.required' => 'Địa chỉ không được để trống',
            'username.unique' => 'Tên đăng nhập đã tồn tại. Vui lòng nhập lại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu tối thiểu 6 kí tự',
        ];

        Validator::make($request->all(), [
            'username' => 'required|unique:accounts',
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|min:10',
            'password' => 'required|min:6',
        ], $messages)->validate();

        if($result != null){

            $alert='Tên đăng nhập đã tồn tại. Vui lòng nhập lại';
            return redirect()->back()->with('alert', $alert);

        } else {
            $password = Hask::make($request->password);
            $name = $request->name;
            $mobile = $request->mobile;
            $address = $request->address;

            Account::insert([
                'username' => $username,
                'password' => $password,
                'name' => $name,
                'mobile' => $mobile,
                'address' => $address
            ]);

            session(['user' => $username]);
            echo "<script>alert('Đăng ký thành công !'); location='.'</script>";
        }
    }

    public function logout(){

        session()->forget('username', 'name');
        if(session('cart')){
            session()->forget('cart');
        }
        if(session('total')){
            session()->forget('total');
        }
        return redirect('/');
    }
}

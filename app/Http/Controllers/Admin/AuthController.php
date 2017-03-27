<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('admin.register');
    }

    public function postRegister(Request $request)
    {
        $validate=Validator::make($request->all(),
            ['name'=>'required|unique:admins|max:20',
                'email'=>'required|email|unique:admins',
                'password'=>'required|max:30|min:6|confirmed',
                'password_confirmation'=>'required']);
        if ($validate->fails()){
            return redirect('admin/register')->withErrors($validate)->withInput();
        }
        $data=$request->all();
        $data['password']=md5($request->get('password'));

        $create=Admin::create($data);

    }
    public function getLogin()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $validate=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required|max:30|min:6']);
        if ($validate->fails()){
            return redirect('admin/login')->withErrors($validate)->withInput();
        }
        $check=Admin::where('email',$request->get('email'))->where('password',md5($request->get('password')))->first();

        if($check){
            session('admin',$check);
            return redirect('admin');
        }else{
            return redirect('admin/login')->with('error','账号或密码错误');
        }

    }
}

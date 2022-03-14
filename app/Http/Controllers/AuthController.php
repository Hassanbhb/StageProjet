<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Console\Logger\ConsoleLogger;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:users',
            'name'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user ->email = $request->email;
        $user ->name = $request->name;
        $user ->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','Enregister avec succes');
        }else{
            return back()->with('fail','Erreur dans votre registration');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('login-in');
            }
            else
            {
            return back()->with('fail','mot de passe incorrect'); 
            }
        }
        else
        {
            return back()->with('fail','Erreur email non enregistré!');
        }
    }
    public function loginIn(Request $request)
    {
        $data = array();
        if (Session()->has('loginId')) {
           $data = User::where('id', '=', Session()->get('loginId'))->first();
    }
        return view('account', compact('data'));   
    }
    public function logOut()
    {
        if (Session()->has('loginId')) {
            Session()->pull('loginId');
            return view('acceuil');
        }
    }
}

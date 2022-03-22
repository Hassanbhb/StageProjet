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
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:5|max:12'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Enregister avec succès!');
            return redirect('profile');
        } else {
            return back()->with('fail', 'Erreur lors de votre inscription!');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('profile');
            } else {
                return back()->with('fail', 'Mot de passe non valide!');
            }
        } else {
            return back()->with('fail', 'Erreur e-mail non sauvegardée !');
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
    public function edit($id)
    {
        $data = user::find($id);
        return view('account', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'secondname' => 'required',
            'tel' => 'required',
            'sexe' => 'required',
            'userImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = user::find($id);

        $hasImg = $request->hasFile('userImg');
        if ($hasImg) {

            $newUserImg = $request->file('userImg');

            //$img_path = $newUserImg->storeAs('public', 'userImage_' . $id . '.' . $newUserImg->extension());
            $img_path = $newUserImg->store('public');
            // $data->userImg = $img_path;
            dd(asset('/storage/' . $img_path));
        }


        $data->email = $request->get('email');
        $data->name = $request->get('name');
        $data->secondname = $request->get('secondname');
        $data->tel = $request->get('tel');
        $data->sexe = $request->get('sexe');
        $data->save();
        return redirect('profile')
            ->with('success', 'Information mise à jour!');
    }
}

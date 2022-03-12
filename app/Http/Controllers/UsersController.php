<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('acceuil');
    }
    public function index1()
    {
        return view('account');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mail' => 'required',
            'usname' => 'required',
            'pw' => 'required',
        ]);
        
        Users::create($request->all());

        return redirect()->route('store')
                         ->with('success','vous etes enregistrés!');
    
    }
    
    public function check(Request $request)
    {
       $user = $request->email;
       $pass = $request->password;

       if (auth()->attempt(array('mail' => $user, 'pw' => $pass)))
       {
           return view('account');
       }
       else
       {
           session()->flash('error', 'Compte non registrer');
           return redirect()->route('users.login');
       }
    
    }

    public function logout(Request $request)
    {
       Auth::logout();
       $request->session()->flush();
       return redirect()->route('users.login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}

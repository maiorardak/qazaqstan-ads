<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['login', 'admin.checkLogin']);
    }


    /**
     * Show Login Form
     *
     * @return Factory|RedirectResponse|View
     */
    public function login()
    {

        if (auth()->user()) {
            return redirect()->route('admin.index');
        }

        return view('admin.login');
    }

    /**
     * Login User
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function checkLogin(Request $request)
    {

        $user = User::where('name', $request->name)->first();

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
            auth()->login($user);

            return redirect()->route('admin.index');
        }


    }

    /**
     * Student Test Events
     *
     * @return Factory|View
     */
    public function index()
    {
//        if (!auth()->user()) {
//
//            return redirect()->route('admin.login');
//        }

        return view('admin.index');
    }
}

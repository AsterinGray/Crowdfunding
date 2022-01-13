<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ]);
        
        $isAuth = Auth::attempt($credentials);
        if($isAuth) return redirect()->route('index');
    }

    public function registerInvestor(Request $request) {
        $data = $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'dateofbirth' => 'required',
            'placeofbirth' => 'required',
            'address' => 'required',
            'bankname' => 'required',
            'accnumber' => 'required'
        ]);

        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        Investor::create([
            'user_id' => $user->id
        ]);

        return redirect()->route('index');
    }

    public function registerBeneficiary(Request $request) {
        $data = $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'dateofbirth' => 'required',
            'placeofbirth' => 'required',
            'address' => 'required',
            'bankname' => 'required',
            'accnumber' => 'required',
            'businessdesc' => 'required',
            'businessadd' => 'required',
            'businesspic' => 'required',
            'grossincome' => 'required',
            'netincome' => 'required'
        ]);

        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        
        $data['user_id'] = $user->id;
        Beneficiary::create($data);

        return redirect()->route('index');
    }
}

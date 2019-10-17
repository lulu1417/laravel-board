<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;
use Str;
use Validator;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $member = Member::where('name', $request->name)->where('password', $request->password)->first();
        $token = Str::random(10);
        if($member){
            if ($member->update(['token'=>$token])) { //update api_token
                    return redirect()->route('board.index')
                        ->with('success', 'Login successfully.');
            }
        }else return "Wrong email or password！";
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'unique:members'],
                'password' => ['required', 'string', 'min:4', 'max:12'],
            ]);
            $token = Str::random(10);
            $create = Member::create([
                'name' => $request['name'],
                'password' => $request['password'],
                'token' => $token,
            ]);
            if ($create) {
                return redirect()->route('board.index')
                    ->with('success', 'Registered successfully.');
            }
        } catch (Exception $e) {
            sendError($e, 'Registered failed.', 500);
        }
    }
}

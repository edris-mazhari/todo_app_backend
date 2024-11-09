<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoignRequest;

class LoginController extends Controller
{

    public function __invoke(LoignRequest $request){
            if(!auth()->attempt($request->validated())) return response()->json(['error'=>__('auth.failed')]);
            $user = auth()->user();
            $token = $user->createToken('API TOKEN')->plainTextToken;
            return response()->json([ 'token' =>$token]);
    }
    //
}

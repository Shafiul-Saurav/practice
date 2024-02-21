<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $password = 1234;
        $code = $request->code;

        $data = [
            'user_name' => 'Saurav',
            'email' => 'saurav@gmail.com'

        ];

        if ($password == $code) {
            return response()->json([
                'userinfo' => $data
            ]);
        } else {
            return response()->json([
                'message' => 'Wrong password'
            ], 400);
        }
    }
}

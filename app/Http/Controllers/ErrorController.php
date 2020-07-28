<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error($error)
    {
        if ($error == 404){
            $message = 'Page not found !';
        }
        elseif ($error == 403)
        {
            $message = 'Access forbidden !';
        }
        elseif ($error == 401)
        {
            $message = 'Unauthorized access !';
        }
        elseif ($error == 500)
        {
            $message = 'Internal server error !';
        }
        return view('error.error',['status' => $error, 'message' => $message]);
    }
}

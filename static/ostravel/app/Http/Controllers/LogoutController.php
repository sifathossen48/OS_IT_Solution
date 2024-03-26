<?php

namespace App\Http\Controllers;


use App\Http\Response\Package\HomeResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function destroy()
    {
        return new HomeResponse();
    }
}

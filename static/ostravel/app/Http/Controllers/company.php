<?php

namespace App\Http\Controllers;

use App\Http\Response\Company\AboutResponse;
use Illuminate\Http\Request;

class company extends Controller
{
    public function index()
    {
        return new AboutResponse();
    }
//
}

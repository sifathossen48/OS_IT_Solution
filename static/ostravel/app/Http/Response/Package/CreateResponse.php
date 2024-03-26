<?php

namespace App\Http\Response\Package;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable
{
    public function toResponse($request)
    {
        return view('packages.create');
    }

}

<?php

namespace App\Http\Response\Company;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class AboutResponse implements Responsable
{
        public function toResponse($request)
        {
            $packages = Package::all();
            return view('Company/about', compact('packages'));
        }
}

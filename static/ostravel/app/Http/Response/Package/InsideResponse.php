<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class InsideResponse implements  Responsable
{
    public function toResponse($request)
    {
        $packages = Package::where('package_type', '=', 'inside')->get();
        $isInside = true;
        //$packages = Package::latest()->get();
//        dd($packages);
        return view('packages.insideBD', compact('packages', 'isInside'));
    }

}

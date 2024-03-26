<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class OutsideResponse implements Responsable
{
    public function toResponse($request)
    {
        $packages = Package::where('package_type', '=', 'outside')->get();
        $isInside = false;
        return view('packages.insideBD', compact('packages', 'isInside'));
    }

}

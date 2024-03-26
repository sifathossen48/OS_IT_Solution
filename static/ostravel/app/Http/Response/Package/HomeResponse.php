<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class HomeResponse implements Responsable
{
    public function toResponse($request)
    {
        $packages = Package::all();
        $internationalOffer = Package::where('package_type', '=', 'outside')
            ->where('offer_type', '=', 'special')->first();
        $localOffer = Package::where('package_type', '=', 'inside')
            ->where('offer_type', '=', 'special')->first();

        return view('packages/index', compact('packages', 'internationalOffer', 'localOffer'));
    }

}

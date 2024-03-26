<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class SearchResponse implements Responsable
{

    /**
     * @param array
     */
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function toResponse($request)
    {
        $package = Package::where('name', '=', $this->attributes['searchInput'])->first();
        return view('packages.show', compact('package'));
    }

}

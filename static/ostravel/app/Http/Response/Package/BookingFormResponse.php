<?php

namespace App\Http\Response\Package;

use Illuminate\Contracts\Support\Responsable;
use App\Models\Package;

class BookingFormResponse implements Responsable
{
    /**
     * @var array
     */
    private $attributes;

    public function __construct(Package $attributes)
    {
        $this->attributes = $attributes;

    }


    public function toResponse($request)
    {
        $package = $this->attributes;
        return view('packages.book', compact('package'));
    }

}

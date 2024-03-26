<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class FilterResponse implements Responsable
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
        //dd($this->attributes);
        $datetime1 = strtotime($this->attributes['checkInDate']); // convert to timestamps
        $datetime2 = strtotime($this->attributes['checkOutDate']); // convert to timestamps
        $days = (int)(($datetime2 - $datetime1)/86400) - 1;

        $packages =  Package::Where('days', '>', $days)
            ->Where('name', 'like', '%' .$this->attributes['destination']. '%')
            ->Where('adult_per_person_price', '>', $this->attributes['maximumPrice'])->get();


//        dd($packages);
        return view('packages.search', compact('packages'));
    }
}

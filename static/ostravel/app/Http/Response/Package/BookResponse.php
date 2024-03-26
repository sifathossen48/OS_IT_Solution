<?php

namespace App\Http\Response\Package;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class BookResponse implements Responsable
{
    /**
     * @param string
     * @param array
     */
    private $attributes;
    private $packageID;

    public function __construct(string $package_id, array $attributes)
    {
        $this->attributes = $attributes;
        $this->packageID = $package_id;
    }

    public function toResponse($request)
    {

        $package = Package:: find($this->packageID);
        $total_price = ($package->adult_per_person_price *  $this->attributes['people_no']) + ($package->child_per_person_price *  $this->attributes['child_no']);
        $payable_amount = $total_price;
        if ($this->attributes['type'] == 'family'){
            $payable_amount = round(($total_price - ($package->family_discount_rate / 100)), 2);
        }
        else if ($this->attributes['type'] == 'corporate'){

            $payable_amount = round(($total_price - ($package->corporate_discount_rate / 100)), 2);
        }


        //dd($package);
        $booking = Booking::create([
            'booking_time' => time(),
            'package_id' => $this->packageID,
            'name' => $this->attributes['name'],
            'email' => $this->attributes['email'],
            'phone_number' => $this->attributes['phone_number'],
            'type' => $this->attributes['type'],
            'chek_in_date' => $this->attributes['chek_in_date'],
            'chek_out_date' => $this->attributes['chek_out_date'],
            'people_no' => $this->attributes['people_no'],
            'child_no' => $this->attributes['child_no'],
//            'total_actual_amount' => $total_price,
//            'offered_payable_amount'  => $this->attributes['offered_payable_amount']
            'total_actual_amount' => $total_price,
            'offered_payable_amount'  => $payable_amount
        ]);

        $discount_amount = round(($total_price - $payable_amount), 2);


//        $response['success'] = true;
//        $response['result'] = $booking->toArray();
//
//        return  response()->json($response);

        return view('packages.invoice', compact('total_price', 'payable_amount', 'discount_amount' ));
//
//        return compact('total_price', 'payable_amount', 'discount_amount' );
//
//        return redirect()->route('packages.invoice', compact('total_price', 'payable_amount', 'discount_amount' ));

    }

}

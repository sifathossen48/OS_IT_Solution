<?php

namespace App\Http\Response\Package;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\UploadedFile;

class EditResponse implements Responsable
{
    /**
     * @param string
     * @param array
     */
    private $attributes;
    private $packageID;

    /**
     * @var UploadedFile|null
     */
    private $file;

    public function __construct(string $package_id, array $attributes, UploadedFile $file = null)
    {
        $this->attributes = $attributes;
        $this->packageID = $package_id;
        $this->file = $file;
    }


    public function toResponse($request)
    {
//        dd($this->packageID);
        $package = Package::where('id', $this->packageID)
            ->update([
                'name' => $this->attributes['name'],
                'location' => $this->attributes['location'],
                'description' => $this->attributes['description'],
                'package_type' => $this->attributes['package_type'],
                'capacity' => $this->attributes['capacity'],
                'days' => $this->attributes['days'],
                'nights' => $this->attributes['nights'],
                'food' => $this->attributes['food'],
                'adult_per_person_price' => $this->attributes['adult_per_person_price'],
                'child_per_person_price' => $this->attributes['child_per_person_price'],
                'family_discount_rate' => $this->attributes['family_discount_rate'],
                'corporate_discount_rate' => $this->attributes['corporate_discount_rate'],
                'offer_type' => $this->attributes['offer_type']
            ]);


        if ($this->file) {
            $extension = $this->file->getClientOriginalExtension();
            $fileName = time() . '-package.' . $extension;
            $path = public_path().'/app/package-photos/';
            $this->file->move($path,$fileName);
            Package::where('id', $this->packageID)->update([
                'image_filepath' => $fileName
            ]);
        }

        return redirect()->route('osTravel.home')->with('success', __('Task was added successfully'));
    }

}

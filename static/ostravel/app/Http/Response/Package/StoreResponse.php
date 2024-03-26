<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class StoreResponse implements Responsable
{
    /**
     * @var array
     */
    private $attributes;
    /**
     * @var UploadedFile|null
     */
    private $file;

    public function __construct(array $attributes, UploadedFile $file = null)
    {
        $this->attributes = $attributes;
        $this->file = $file;
    }

    public function toResponse($request)
    {
        $package = Package::create([
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
            //Storage::disk('public')->put($fileName, $this->file);
            //$path = $this->file->storePubliclyAs('app/package-photos', time() . '-package.' . $extension, 'public');
            $package->update([
                'image_filepath' => $fileName
            ]);
        }

        return redirect()->route('osTravel.home')->with('success', __('Task was added successfully'));
    }

}

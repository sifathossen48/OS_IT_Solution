<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\View\View;

class EditFormResponse implements Responsable
{

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
        return view('packages/edit', compact('package'));
    }


}

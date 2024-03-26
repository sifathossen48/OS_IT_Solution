<?php

namespace App\Http\Response\Package;

use App\Models\Package;
use Illuminate\Contracts\Support\Responsable;

class ShowResponse implements Responsable
{
    /**
     * @var Package
     */
    private $package;

    public function __construct(Package $package)
    {
        $this->package = $package;
    }

    public function toResponse($request)
    {
        $package = $this->package;
        return view('packages.show', compact('package'));
    }

}

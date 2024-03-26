<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Response\Package\BookingFormResponse;
use App\Http\Response\Package\BookResponse;
use App\Http\Response\Package\CreateResponse;
use App\Http\Response\Package\EditFormResponse;
use App\Http\Response\Package\EditResponse;
use App\Http\Response\Package\FilterResponse;
use App\Http\Response\Package\HomeResponse;
use App\Http\Response\Package\InsideResponse;
use App\Http\Response\Package\OutsideResponse;
use App\Http\Response\Package\SearchResponse;
use App\Http\Response\Package\ShowResponse;
use App\Http\Response\Package\StoreResponse;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return new InsideResponse();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return CreateResponse
     */
    public function create()
    {
        return new CreateResponse();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        return new StoreResponse(
            $request->except('image_filepath'),
            $request->hasFile('image_filepath') ? $request->file('image_filepath') : null
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
//        dd(public_path("app/package-photos/1639942872-package.png"));
        //dd(url('storage/app/package-photos/1639942872-package.png'));
        //dd(url('storage/app/package-photos/1639982172-package.jpg'));
        return new ShowResponse($package);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, string $package_id)
    {
//        return new StoreResponse(
//            $request->except('image_filepath'),
//            $request->hasFile('image_filepath') ? $request->file('image_filepath') : null
//        );
        return  new EditResponse($package_id, $request->except('image_filepath'), $request->hasFile('image_filepath') ? $request->file('image_filepath') : null
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  inside()
    {
        return new InsideResponse();

    }

    public function  outside()
    {
        return new OutsideResponse();

    }

    public  function form(Package $package){

        return new BookingFormResponse($package);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function book(Request $request, string $package_id)
    {

        return new BookResponse($package_id, $request->all());

    }

    public  function  search(Request $request){
        return new SearchResponse($request->all());
    }

    public  function  filter(Request $request){
        return new FilterResponse($request->all());
    }

    public  function  home(){
        return new HomeResponse();
    }

    public function editForm(Request $request, string $package_id)
    {
        return  new EditFormResponse($package_id, $request->all());
    }


}

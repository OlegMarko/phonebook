<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::orderBy('name', 'ASC')->get()->toArray();

        return response()->json($phones, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PhoneRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PhoneRequest $request)
    {
        $request_data = $request->only(['name', 'number', 'email']);

        $phone = Phone::create($request_data);

        return response()->json($phone, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PhoneRequest $request
     * @param Phone $phone
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PhoneRequest $request, Phone $phone)
    {
        $request_data = $request->only(['name', 'number', 'email']);

        $phone = Phone::find($phone)->first()->update($request_data);

        return response()->json($phone, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        $phone = Phone::find($phone)->first()->delete();

        return response()->json($phone, 200);
    }
}

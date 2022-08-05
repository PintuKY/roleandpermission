<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use Exception;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response(['customer' => Customers::all(), 'error' => 'false']);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request->all());

        $validator = Validator::make($request->all(), [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'phone'         => 'required|numeric|digits:5',
            "address1"      => 'required',
            "address2"      => 'required',
            "city"          => 'required',
            "landmakr"      => 'required',
            "post_office"   => 'required',
            "pincode"       => 'required|numeric|digits:6',
            "country"       => 'required',
            "state"         =>' required',
        ]);

        if ($validator->fails()) {

            return response(["errors" => $validator->errors()->all()]);
        }

        try {

            Customers::create([
                "first_name"    => $request->get("first_name"),
                "last_name"     => $request->get("last_name"),
                "phone"         => $request->get("phone"),
                "address1"      => $request->get("address1"),
                "address2"      => $request->get("address2"),
                "city"          => $request->get("city"),
                "landmakr"      => $request->get("landmakr"),
                "post_office"   => $request->get("post_office"),
                "pincode"       => $request->get("pincode"),
                "country"       => $request->get("country"),
                "state"         => $request->get("state")
            ]);

            return response(["data" => "Successfully inserted", "error" =>  false]);
        } catch (Exception $e) {

            Log::error($e->getMessage());
            return response(["data" => "Internal Server Error", "error" =>  true]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

             return response(['customer' => Customers::find($id), 'error' => false]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Log::info($request->all());

        $validator = Validator::make($request->all(), [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'phone'         => 'required|numeric|digits:5',
            "address1"      => 'required',
            "address2"      => 'required',
            "city"          => 'required',
            "landmakr"      => 'required',
            "post_office"   => 'required',
            "pincode"       => 'required|numeric|digits:6',
            "country"       => 'required',
            "state"         =>' required',
        ]);

        if ($validator->fails()) {

            return response(["errors" => $validator->errors()->all()]);
        }

        try {

            Customers::where('id',$id)->update([
                "first_name"    => $request->get("first_name"),
                "last_name"     => $request->get("last_name"),
                "phone"         => $request->get("phone"),
                "address1"      => $request->get("address1"),
                "address2"      => $request->get("address2"),
                "city"          => $request->get("city"),
                "landmakr"      => $request->get("landmakr"),
                "post_office"   => $request->get("post_office"),
                "pincode"       => $request->get("pincode"),
                "country"       => $request->get("country"),
                "state"         => $request->get("state")
            ]);

            return response(["data" => "Successfully updated", "error" =>  false]);
        } catch (Exception $e) {

            Log::error($e->getMessage());
            return response(["data" => "Internal Server Error", "error" =>  true]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Customers::where('id', $id)->exists()) 
        {
            $customers = Customers::find($id);
            $customers->delete();

            return response()->json([
              "message" => "records deleted"
            ], 202);
        } 
        else {
            return response()->json([
              "message" => "Customer not found"
            ], 404);
          }
    }
}

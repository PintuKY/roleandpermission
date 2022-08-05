<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response(["data" => Student::all(),  "error" => false]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
            'name'  => 'required',
            'phone' => 'required',
            'class' => 'required'
        ]);

        if ($validator->fails()) {

            return response(["errors" => $validator->errors()->all()]);
        }

        try {

            Student::create([
                "name"  => $request->get("name"),
                "phone" => $request->get("phone"),
                "class" => $request->get("class")
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return response(['data' => Student::where('id', $id)->first(), "error" => false]);
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

        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'phone' => 'required',
            'class' => 'required'
        ]);

        if ($validator->fails()) {

            return response(["errors" => $validator->errors()->all()]);
        }

        try {
            
            $data = Student::where('id', $id)
                ->update([
                    "name"  => $request->get("name"),
                    "phone" => $request->get("phone"),
                    "class" => $request->get("class")
                ]);

            //or
            //$data->name = $request->get("name") ?? $data->name;

            return response(["data" => "Successfully update", "error" =>  false]);
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

        if(Student::where('id', $id)->exists()) 
        {
            $student = Student::find($id);
            $student->delete();

            return response()->json([
              "message" => "records deleted"
            ], 202);
        } 
        else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
    }
}
